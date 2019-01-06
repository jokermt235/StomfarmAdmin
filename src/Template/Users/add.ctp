<form class="uk-form-stacked">
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
        <label class="uk-form-label" for="roles">Роли</label>
        <select class="uk-select" name="role" id="roles">
            <option value="ROLE_ADMIN">Администратор</option>
            <option value="ROLE_USER">Пользователь</option>
            <option value="ROLE_SOME_USER">Обычный пользователь</option>
        </select>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label"></label>
        <div class="uk-form-controls">
            <a class="uk-button uk-button-primary">Сохранить</a>
        </div>
    </div>
</form>
