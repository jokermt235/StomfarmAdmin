<form class="uk-form-stacked" redirect="<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>">
    <div class="uk-margin">
        <div class="uk-hidden">
            <input type="text" name="id" value="<?=$user->id?>">
        </div>
        <label class="uk-form-label" for="fio">Ф.И.О</label>
        <div class="uk-form-controls">
             <input name="fio" class="uk-input" id="fio" type="text"
                ceholder="Фамилия Имя Отчество"
                value="<?=$user->fio?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="username">Имя пользователя</label>
        <div class="uk-form-controls">
            <input name="username" class="uk-input" id="username" type="text" 
                placeholder="Логин"
                value="<?=$user->username?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="password">Пароль</label>
        <div class="uk-form-controls">
            <input name="password" class="uk-input" id="password" type="password" placeholder="Новый пароль">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="password_repeat">Повтор пароля</label>
        <div class="uk-form-controls">
            <input name="password_repeat" class="uk-input" id="password_repeat" type="password" placeholder="Повтор пароля">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="roles">Роли</label>
        <div id="select_container">
            <!--<select class="uk-select" name="role" id="roles">
                <option value="ROLE_ADMIN">Администратор</option>
                <option value="ROLE_USER">Пользователь</option>
                <option value="ROLE_SOME_USER">Обычный пользователь</option>
            </select>-->
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label"></label>
        <div class="uk-form-controls" id="submit_button_container">
        </div>
    </div>
</form>
<?= $this->Html->script('components/button.submit.js')?>
<?= $this->Html->script('components/select.single.js')?>
<script>
    var selectedValue = "<?=$user->role?>";
    ReactDOM.render(e(ButtonSubmit), document.querySelector('#submit_button_container'));   
    ReactDOM.render(
        React.createElement(SelectSingle,
        {
            data :{
                name : 'role',
                selected : selectedValue,
                options:[
                    {
                        value : "ROLE_ADMIN",
                        title : "Администратор"
                    },
                    {
                        value : "ROLE_USER",
                        title : "Пользователь"
                    },
                    {
                        value : "ROLE_SOME_USER",
                        title : "Обычный пользователь"
                    }
                ]
            }
        }),
        document.querySelector('#select_container')
    );
</script>
