<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <!--<img class="uk-margin" src="img/flower.png" alt="">-->
        <span class="uk-heading-primary uk-light"><?=__('Рекомендации')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Главная')?></a></li>
        <li><span><?=__('Рекомендации')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin-top">
    <div class="uk-grid uk-child-width-expand@s" uk-grid>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/tpp.jpg', array('fullBase'   => true));?>" data-fancybox="group2">
                <?= $this->Html->image('tpp.jpg')?>
            </a>
        </div>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/jiarus.jpg', array('fullBase'   => true));?>" data-fancybox="group2">
                <?= $this->Html->image('jiarus.jpg')?>
            </a>
        </div>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/apkrus.jpg', array('fullBase'   => true));?>" data-fancybox="group2">
                <?= $this->Html->image('apkrus.jpg')?>
            </a>
        </div>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/BIO%20KG%20Rus.jpg', array('fullBase'   => true));?>" data-fancybox="group2">
                <?= $this->Html->image('BIO%20KG%20Rus.jpg')?>
            </a>
        </div>
    </div>
</div>
<?= $this->element('footer');
