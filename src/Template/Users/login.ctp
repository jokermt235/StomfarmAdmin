<div class="uk-panel">
    <div class="uk-panel" style="background-color: #0f7ae5;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light">Вход</span>
    </div>
</div>

<div class="uk-panel uk-padding uk-margin-top uk-margin-large-bottom">
    <div class="uk-flex uk-height-medium uk-margin uk-text-center"> 
        <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body">
            <div class="uk-card-media-top">
                <?= $this->Html->image('stomfarm_logo_256x256.png',['width'=>120])?>
            </div> 
            <div class="result">
            </div>
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
                window.location.href = redirectUrl;
            },
            error: function(){
                $('.result').html('<div class="uk-alert-danger" uk-alert>'+
                    '<a class="uk-alert-close" uk-close></a>'+
                    '<p>Неправильное имя пользователя или пароль</p>'+
                '</div>');
            }
        });
    });
</script>
