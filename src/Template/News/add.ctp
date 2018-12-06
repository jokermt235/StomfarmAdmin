<?= $this->element('admin_menu')?>
<div class="uk-card uk-card-default uk-card-body">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-1-5@m" style="border-right:solid 1px #289246;">
            <div class="uk-margin-large-bottom">
                <?= $this->element('nav')?>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-margin-large-bottom">
                <form class="uk-form-horizontal uk-margin-large uk-padding-large" enctype="multipart/form-data" method="POST">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Заголовок:</label>
                        <div class="uk-form-controls">
                            <input name="title" class="uk-input" id="form-horizontal-text" type="text" placeholder="Заголовок">
                            <input type="hidden" name="token" value="<?= $token?>">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Описание:</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" rows="15" name="description" placeholder="Описание..."></textarea>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label"></label>
                        <div class="uk-form-controls">
                            <button class="uk-button uk-button-default" type="submit" style="background: #289246;color:white">Сохранить</button>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="js-upload uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <div class="uk-form-custom">
                                <input type="file" multiple>
                                <span class="uk-link">Выбрать файлы</span>
                            </div>
                        </div>
                        <progress id="js-progressbar" class="uk-progress" value="0" max="100"></progress>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

    var bar = document.getElementById('js-progressbar');
    var upload_url = "<?=$this->Url->build(['controller'=>'News','action'=>'upload'])?>";
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    var token = "<?= $token?>";

    UIkit.upload('.js-upload', {

        url: upload_url,
        multiple: true,

        beforeSend: function (environment) {
            console.log('beforeSend', arguments);
            // The environment object can still be modified here. 
            // var {data, method, headers, xhr, responseType} = environment;
            environment.headers = {
                'X-CSRF-Token': csrfToken,
                'Token' : token
            }

        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }

    });

</script>
