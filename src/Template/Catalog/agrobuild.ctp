<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <img class="uk-margin" src="img/horse.png" alt="">
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Услуги агростроительства')?></span>
        <?=__('О нас')?>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Услуги агростроительства')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-margin uk-padding-large">
    <?= $this->Html->image('agrob.jpg')?>
    <h5><?=__('ОсОО Фалкон Групп  является представителем Российской компании ООО Ростагрострой. В сотрудничестве с ООО Ростагрострой ОсОО Фалкон Групп продает мини-заводы под ключ  по переработке молока, пекарни, рыбы, сыроварни а так же комплект оборудования без здания для пищевого назначения')?>. Подробно на сайте http://rostagrostroy.com/</h5>
    <hr>
    <h5 class="uk-text-bold"><?=__('Список мини-заводов:')?></h5>
    <h6>1)	<?=__('Мини-завод по переработке молока от 500 кг. и до 100 тн в сутки. и более.')?> (сделать ссылку на сайт <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a>)</h6>
    <h6>2)	<?=__('Мини-завод по переработке мясо от 1000 кг и более.')?> (сделать ссылку на сайт <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a>)</h6>
    <h6>3)	<?=__('Убойные цеха КРС (крупно рогатый скот) от 5 голов и более.')?> (сделать ссылку на сайт <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a>)</h6>
    <h6>4)	<?=__('Пекарни.')?>  (сделать ссылку на сайт <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a>)</h6>
    <h6>5)	<?=__('Мини-завод по переработке ягод и фруктов. Переработка ягод и фруктов от 300 кг. в смену и  более.')?> (сделать ссылку на сайт <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a>)</h6>
    <h6>6)	<?=__('Переработка грибов. Переработка от 500 кг. в смену и более.')?> <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a> </h6>
    <h6>7)	<?=__('Сыроварни. Переработка молока от 500 кг. в сутки и более.')?>  <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a></h6>
    <h6>8)	<?=__('Мини-завод для производства макарон.')?>  <a href="http://rostagrostroy.com/">http://rostagrostroy.com/</a></h6>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <h3 class="uk-text-lead"><?=__('СТРОИТЕЛЬСТВО ТЕПЛИЦ РАЗНОЙ СЛОЖНОСТИ И КОНСТРУКЦИИ')?></h3>
    <hr>
    <div class="uk-grid uk-margin">
        <div>
            <a href="<?= $this->Url->assetUrl('/img/tep1.jpg')?>" data-fancybox="group2">
                <?= $this->Html->image('tep1.jpg')?>
            </a>
            <h5 class="uk-text-center uk-margin-small-top"><?=__('Вегетарий')?></h5>			        
        </div>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/tep2.jpg')?>" data-fancybox="group2">
                <?= $this->Html->image('tep2.jpg')?>
            </a>
            <h5 class="uk-text-center uk-margin-small-top"><?=__('Фермерская')?></h5>			        
        </div>
        <div>
            <a href="<?= $this->Url->assetUrl('/img/tep3.jpg')?>" data-fancybox="group2">
                <?= $this->Html->image('tep3.jpg',['style'=>'height:112px'])?>
            </a>
            <h5 class="uk-text-center uk-margin-small-top"><?=__('Миттлайдера')?></h5>			        
        </div>
        <div>
            <a data-fancybox="group2" href="<?= $this->Url->assetUrl('/img/tep4.jpg')?>">
                <?= $this->Html->image('tep4.jpg',['style'=>'height:112px'])?>
            </a>
            <h5 class="uk-text-center uk-margin-small-top"><?=__('Двускатный')?></h5>			        
        </div>
    </div>
    <h4><?=__('По заказу клиента можем построить теплицу любой конструкции и сложности.')?> </h4>
    <h5><?=__('Используемые материалы по желанию клиента:')?></h5>
    <ul class="uk-list uk-list-bullet">
        <li><?=__('Трубы круглые железные, различной толщины')?></li>
        <li><?=__('Трубы профильные железные, различной тольщины и размеров')?></li>
        <li><?=__('Пленка тепличная, производство')?></li>
        <li><?=__('Поликарбонат тепличный')?></li>
    </ul>
    <h4><?=__('На базе своей теплицы оказываем следующие услуги:')?></h4>
    <h5 class="uk-margin-small-top"><?=__('Услуги по выращиванию рассады')?> (огурцов, помидоров, листья салата, руккола, капусты, баклажан, базилик, и другие)</h5>
    <h5 class="uk-margin-small-top"><?=__('Регулярные обучения персонала по уходу за растениями в теплице (своевременная подкормка, использование разных видов питания и др.)')?></h5>
    <h3 class="uk-text-lead"><?=__('СТРОИТЕЛЬСТВО СКЛАДОВ И НАВЕСОВ')?></h3>
    <hr>
    <ul class="uk-list uk-list-bullet">
        <li><?=__('Любые детали и конструкции из листового металла толщиной до 2см;')?></li>
        <li><?=__('Навесы, заборы, фермы, беседки и другие конструкции из металла разной сложности.')?></li>
        <li><?=__('Используемая покраска : Полимерно-порошковая (горячая ) покраска металлических изделий')?></li>
    </ul>
</div>
<?= $this->element('footer')?>
