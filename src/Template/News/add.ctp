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
                <form class="uk-form-horizontal uk-margin-large uk-padding-large" enctype="multipart/form-data" method="POST" action="" id="form">
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
                        <div class="js-upload uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <div class="uk-form-custom">
                                <input type="file" multiple>
                                <input type="hidden" id="image">
                                <span class="uk-link">Выбрать файлы</span>
                            </div>
                        </div>
                        <div id="upload_preview" uk-grid>
                        </div>
                        <progress id="js-progressbar" class="uk-progress" value="0" max="100"></progress>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label"></label>
                        <div class="uk-form-controls">
                            <a id="submit" href="javascript:" class="uk-button uk-button-default" style="background: #289246;color:white">Сохранить</a>
                        </div>
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
    var tmp_root = '<?= $this->Url->assetUrl("/img/news/img/")?>';
    var file_remove = '<?= $this->Url->build(['controller'=>'News','action'=>'remove'])?>';
    var news_save_url = '<?= $this->Url->build(['controller'=>'News','action'=>'add'])?>';
    var redirect = '<?= $this->Url->build(['controller'=>'News','action'=>'index']) ?>';
    var upload_file_name = "";

    UIkit.upload('.js-upload', {

        url: upload_url,
        multiple: false,

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
            //console.log('completeAll', arguments);
            var file = arguments[0].response;
            console.log('completeAll', arguments[0].response);
            /*setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);*/
            var html = 
            "<div>"+
                "<div style='color:red; font-weight:bolder;cursor:pointer'" + "image=" + arguments[0].response + " onclick='deleteImage(this)'>" + "X</div>"+
                "<img src='" + tmp_root + "small_" +file +"'>"+
            "</div>";
            $('#image').val(file);
            $('#upload_preview').html(html);
            //alert('Upload Completed');
        }

    });

    $('#submit').click(function(){
        var form_data = $("#form").serializeArray();
        console.log(form_data);
        var valid_data = 'title=' + form_data[0].value + '&description='+ form_data[2].value + '&image=' + $('#image').val();
        $.ajax({
            type: "POST",
            beforeSend: function(request) {
                request.setRequestHeader("Token", token);
                request.setRequestHeader('X-CSRF-Token',csrfToken);
            },
            data : valid_data,
            url: news_save_url,
            processData: false,
            success: function(msg) {
                window.location.href= redirect;
            }
        });

    });

    function deleteImage(element)
    {
        console.log(element);
        var file_remove_url = file_remove +"/" + $(element).attr('image');
		$.ajax({
            type: "POST",
            beforeSend: function(request) {
                request.setRequestHeader("Token", token);
                request.setRequestHeader('X-CSRF-Token',csrfToken);
            },
            url: file_remove_url,
            processData: false,
            success: function(msg) {
                $(element).parent().remove();
            }
        });
    }

</script>
