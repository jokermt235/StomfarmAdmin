<form class="uk-form-stacked" redirect="<?=$this->Url->build(['controller'=>'Partners','action'=>'index'])?>" >
    <div class="uk-margin">
        <label class="uk-form-label" for="name">Название(Имя)</label>
        <div class="uk-form-controls">
             <input name="name" class="uk-input" id="name" type="text" placeholder="Название(Имя)">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Телефон</label>
        <div class="uk-form-controls">
            <input name="phone" class="uk-input" id="phone" type="text" placeholder="Телефон">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">Адрес</label>
        <div class="uk-form-controls">
            <input name="address" class="uk-input" id="address" type="text" placeholder="Телефон">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="barcode">E-mail</label>
        <div class="uk-form-controls">
            <input name="email" class="uk-input" id="email" type="text" placeholder="E-mail">
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
<script>
    ReactDOM.render(e(ButtonSubmit), document.querySelector('#submit_button_container'));
</script>
