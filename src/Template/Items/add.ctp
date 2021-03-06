<form class="uk-form-stacked" redirect="<?=$this->Url->build(['controller'=>'Items','action'=>'index'])?>">
    <div class="uk-margin">
        <label class="uk-form-label" for="name">Название</label>
        <div class="uk-form-controls">
             <input name="name" class="uk-input" id="name" type="text" placeholder="Название">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Цифровой штрихкод</label>
        <div class="uk-form-controls">
            <input name="barcode" class="uk-input" id="barcode" type="text" placeholder="Строка штрихкода">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Код в бухгалтерии</label>
        <div class="uk-form-controls">
            <input name="acc_code" class="uk-input" id="acc_code" type="text" placeholder="Код в бухгалтерии">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="storage_id"></label>    
        <div class="uk-form-controls" id="storage_id_container">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="description">Описание</label>
        <textarea name="description"  class="uk-textarea" id="description" rows="5"></textarea>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="price">Цена</label>    
        <input class="uk-input" name="price" type="number">
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="price">Предложенная цена</label>    
        <input class="uk-input" name="offer_price" type="number">
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="amount">Количество</label>    
        <input class="uk-input" name="amount" type="number">
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="image">Изображение</label>
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
    var url = "<?=$this->Url->build(['controller'=>'Items','action'=>'add'])?>";
    var urlSelect = "<?=$this->Url->build(['controller'=>'Storages','action'=>'index'])?>";
    ReactDOM.render(e(ButtonSubmit), document.querySelector('#submit_button_container'));   
    instance.get(urlSelect + '.json').then((response)=>{
        if(response.data.storages){
            var options = [];
            var storages = response.data.storages;
            for(var storage of storages){
                options.push({
                    title : storage.name,
                    value : storage.id
                });
            }
            ReactDOM.render(
                React.createElement(SelectSingle,
                {
                    data :{
                        empty_value : true,
                        name : 'storage_id',
                        selected : "",
                        options
                    }
                }),
                document.querySelector('#storage_id_container')
            );
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    });
    
</script>
