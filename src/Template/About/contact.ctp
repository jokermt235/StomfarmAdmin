<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light"><?=__('Контакты')?></span>
    </div>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom">
    <div class="uk-grid uk-child-width-expand@s uk-margin-top" uk-grid>
        <div class="uk-padding" style="border: 0.5px solid grey">
            <div class="uk-text-lead"><?=__('Наш адрес')?></div>
            <hr style="border: 0;border-top: 3px double #8c8c8c;margin-top: 10px;">
            <div style="font-size: 18px;" class="uk-margin-small">
                <span uk-icon="location"></span>
                <span><?=__('ул.Бакаева, 132/ Грибоедова (Бишкек/Кыргызстан)')?></span>
            </div>						
            <div style="font-size: 18px;" class="uk-margin-small">
                <span uk-icon="receiver"></span>
                <span>+996 557 177 175 (WhatsApp/Telegram)</span>
            </div>
            <div style="font-size: 18px;" class="uk-margin-small">
                <span uk-icon="mail"></span>
                <span>falcon.kg@mail.ru </span>
            </div>
        </div>
        <div class="uk-visible@m">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39351.64010163054!2d74.567393955325!3d42.855361696175265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4158eaa4b8617bb7!2z0JPRgNC40LHQvtC10LTQvtCy0LAg0JHQsNC60LDQtdCy0LA!5e0!3m2!1sru!2skg!4v1533467072458" width="563" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
