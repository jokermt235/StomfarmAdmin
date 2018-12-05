<?= $this->element('admin_menu')?>
<div class="uk-card uk-card-default uk-card-body">
    <div class="uk-text-center" uk-grid>
        <div class="uk-width-1-5@m" style="border-right:solid 1px #289246;">
            <div class="uk-margin-large-bottom">
                <?= $this->element('nav')?>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-margin-large-bottom">
                <form class="uk-form-horizontal uk-margin-large uk-padding-large">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Заголовок:</label>
                        <div class="uk-form-controls">
                            <input name="title" class="uk-input" id="form-horizontal-text" type="text" placeholder="Заголовок">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Описание:</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" rows="15" name="description" placeholder="Описание..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
