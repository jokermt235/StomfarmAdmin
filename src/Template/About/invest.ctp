<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light"><?=__('Инвестиционные предложения')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Главная')?></a></li>
        <li><span><?=__('Инвестиционные предложения')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin-top">
    <div class="uk-panel uk-margin-large">
        <h2 class="uk-text-lead uk-text-bold"><?=__('Инвестиционные предложения нашей компании включают следующие темы:')?></h2>
        <h5>1. <?=__('Наша компания готова по заказу наших потенциальных партнеров оказывать содействие в выращивании любых бобовых культур в случае предоставления семян.')?></h5>
        <h5>2. <?=__('Мы открыты обсудить вопросы, на взаимовыгодных условиях: открытие филиалов в других странах по продаже фасоли, сухофруктов и сушеных фруктов, произведенных в нашей стране.')?></h5>
    </div>
</div>
<?= $this->element('footer');?>
