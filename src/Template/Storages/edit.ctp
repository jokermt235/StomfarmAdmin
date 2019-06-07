<form class="uk-form-stacked" redirect="<?=$this->Url->build(['controller'=>'Storages','action'=>'index'])?>" >
    <div class="uk-margin">
        <label class="uk-form-label" for="name">Название(Имя)</label>
        <div class="uk-form-controls">
             <input name="name" class="uk-input" id="name" type="text" placeholder="Название(Имя)"
                value=<?=$storage['name']?>>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Алиас</label>
        <div class="uk-form-controls">
            <input name="alias" class="uk-input" id="alias" type="text" placeholder="Бытовое название">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Пользователь</label>
        <div class="uk-form-controls" id="select_container">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label"></label>
        <div class="uk-form-controls" id="submit_button_container">
            <a class="uk-button uk-button-primary">Сохранить</a>
        </div>
    </div>
</form>
<?= $this->Html->script('components/button.submit.js')?>
<?= $this->Html->script('components/select.single.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>";
    var selected_user = "<?=$storage->user_id?>";
    ReactDOM.render(e(ButtonSubmit), document.querySelector('#submit_button_container'));
    instance.get(url + '.json').then((response)=>{
        if(response.data.users){
            var options = [];
            for(var user of response.data.users){
                options.push(
                    {value: user.id,title: user.fio}
                );
            }
            ReactDOM.render(
                React.createElement(SelectSingle,
                {
                    data :{
                        name : 'user_id',
                        selected : selected_user,
                        empty_value: true,
                        options
                    }
                }),
                document.querySelector('#select_container')
            );
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    });
</script>
