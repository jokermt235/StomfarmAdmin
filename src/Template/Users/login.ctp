<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light">Вход</span>
    </div>
</div>
<div class="uk-panel uk-padding-large uk-margin-top uk-margin-large-bottom">
    <div class="uk-flex uk-height-medium uk-margin uk-text-center">
        <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-3@s uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal">
                <div class="uk-margin">
                    <label class="uk-form-label" for="username">Логин : </label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="username" type="text" placeholder="Имя пользователя">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="password">Пароль : </label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="password" type="password" placeholder="Пароль">
                    </div>
                </div>
                <div class="uk-margin-top">
                    <a href="javascript:" class="uk-button uk-button-primary" id="loginButton">Войти</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
<script>
    var loginUrl = "<?= $this->Url->build(['controller'=>'Users','action'=>'login'])?>";
    var redirectUrl = "<?= $this->Url->build(['controller'=>'Admin','action'=>'index'])?>";
    $('#loginButton').click(function(){
        var validData = 'username='+ $('#username').val() + "&" + "password=" + $('#password').val();
        $.ajax({
            type: "POST",
            beforeSend: function(request) {
                request.setRequestHeader('X-CSRF-Token',csrfToken);
            },
            data : validData,
            url: loginUrl,
            processData: false,
            success: function(msg) {
                console.log(msg);
                window.location.href= redirectUrl;
            }
        });
    });
</script>
