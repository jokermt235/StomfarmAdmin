<form class="uk-form-stacked" ng-controller="addFormController">
    <div class="uk-margin">
        <label class="uk-form-label" for="fio">Ф.И.О</label>
        <div class="uk-form-controls">
             <input name="fio" class="uk-input" id="fio" type="text" placeholder="Фамилия Имя Отчество">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="username">Имя пользователя</label>
        <div class="uk-form-controls">
            <input name="username" class="uk-input" id="username" type="text" placeholder="Логин">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="password">Пароль</label>
        <div class="uk-form-controls">
            <input name="password" class="uk-input" id="password" type="text" placeholder="пароль">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="password_repeat">Повтор пароля</label>
        <div class="uk-form-controls">
            <input name="password_repeat" class="uk-input" id="password_repeat" type="text" placeholder="Повтор пароля">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="roles">Роли</label>
        <select class="uk-select" name="role" id="roles">
            <option value="ROLE_ADMIN">Администратор</option>
            <option value="ROLE_USER">Пользователь</option>
            <option value="ROLE_SOME_USER">Обычный пользователь</option>
        </select>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label"></label>
        <div class="uk-form-controls" id="submit_button_container">
        </div>
    </div>
</form>
<?= $this->Html->script('components/button.submit.js')?>
<script>
    ReactDOM.render(e(ButtonSubmit), document.querySelector('#submit_button_container'));
</script>
