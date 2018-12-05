<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('juicer.png',['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Соковыжималки')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build("/")?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Соковыжималки')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin-top">
    <h4 class="uk-text-center"><?=__('ПРОТИРОЧНАЯ МАШИНА')?></h4>
    <h5><?=__('ПРОТИРОЧНАЯ МАШИНА со сменными ситами для протирания мягких косточковых фруктов, ягод и томатов в однородную массу или пюре с удалением косточек, при изготовлении джемов, конфитюров, томатной пасты, концентрированных пюре и соков  в перерабатывающей и консервной  промышленности.')?></h5>
    <div class="uk-grid uk-child-width-expand@s">
        <div class="uk-text-center">
            <a href="<?=$this->Url->assetUrl('/img/juicer1.png')?>" data-fancybox="group2">
                <?= $this->Html->image('juicer1.png', ['style'=>'height:215px'])?>
            </a>
        </div>
        <div class="uk-text-center">
            <a href="img/ju1.jpg" data-fancybox="group2"><img src="img/juicer2.jpg" alt=""></a>
            <a href="<?=$this->Url->assetUrl('/img/ju1.jpg')?>" data-fancybox="group2">
                <?= $this->Html->image('ju1.jpg', ['style'=>'height:215px'])?>
            </a>
        </div>
        <div class="uk-text-left">
            <a href="<?=$this->Url->assetUrl('/img/juicer3.png')?>" data-fancybox="group2">
                <?= $this->Html->image('juicer3.png', ['style'=>'height:215px'])?>
            </a>
        </div>
        </div>
    <div class="uk-container uk-margin">
        <h4 class="uk-text-center"><?=__('Стандартная комплектация Протирочной машины включает:')?></h4>
        <h5 class="uk-margin-small">- <?=__('1 цилиндрическое сито, выполненное из коррозионностойкой нержавеющей стали AISI 316 или 316L, с отв. Ø 3 или 5 мм для протирания слив, абрикос, персиков')?></h5>
        <h5 class="uk-margin-small">- <?=__('неподвижный металлический опорный каркас для установки и фиксации протирочной машины')?></h5>
        <h5 class="uk-margin-small">- <?=__('пульт управления')?></h5>
        <h4 class="uk-margin-small"><?=__('В качестве дополнительных Опций предлагается:')?></h4>
        <h5 class="uk-margin-small">- <?=__('2 дополнительных цилиндрических сита для перетирания ягод и отделением косточек, с ячейкой 0,6 - 0,8 мм и сита для перетирания бланшированных и измельченных томатов с ячейкой 1-1,5 мм')?></h5>
        <h5 class="uk-margin-small">- <?=__('Нержавеющая Воронка – увеличенный приемный бункер для непрерывной приемки фруктов с транспортера (изготавливается по желанию и по размерам  Покупателя)')?></h5>
        <h5 class="uk-margin-small"><?=__('Протирочная машина изготовлена из Пищевой корр/стойкой нерж.стали 316.')?></h5>
        <h5 class="uk-margin-small"><?=__('Подшипниковые узлы защищены от попадания измельчаемой массы.')?></h5>
    </div>
    <div class="uk-grid uk-margin uk-margin-top uk-container">
        <div class="uk-width-expand uk-margin-medium-top">
            <h5 class="uk-margin-small"><?=__('ПРОТИРОЧНАЯ МАШИНА СО СМЕННЫМИ СИТАМИ')?></h5>
            <h5 class="uk-margin-small">- <?=__('Производительность машины зависит от типа перетираемого продукта: для ягод меньше 200-250 кг/ч;(для ягод меньше 200-250 кг/ч; для слив, персиков, абрикос больше 400-500 кг/час)')?></h5>
            <h5 class="uk-margin-small">- <?=__('в комплекте 1 нерж. сито с ячейкой 3 или 5 мм')?></h5>
            <h5 class="uk-margin-small">- <?=__('Мощность эл/двигателя 1,5 кВт, 220/380 В, 3 ф')?></h5>
            <h5 class="uk-margin-small">- <?=__('скорость вращения рабочего органа регулируется (Опционально)')?></h5>
            <h5 class="uk-margin-small"><?=__('От частотного преобразователя скорости вращения.')?></h5>
            <h5 class="uk-margin-small">- <?=__('каркас, неподвижный из крашенного металла (грунтованный, 2 слойная порошковая окраска)')?></h5>
        </div>
         <div class="uk-width-auto uk-margin-medium-top">
            <?= $this->Html->image('ju1.jpg')?>
        </div>
    </div>
    <div class="uk-grid uk-margin uk-margin-top uk-container">
        <div class="uk-width-expand uk-margin-large-top">
            <h5 class="uk-margin-small"><?=__('СМЕННЫЕ ДОПОЛНИТЕЛЬНЫЕ СИТА')?></h5>
            <h5 class="uk-margin-small">- <?=__('Толщина перфор. стали 2 мм')?></h5>
            <h5 class="uk-margin-small">- <?=__('ДЛЯ ПРОТИРАНИЯ ЯГОД, с отверст. Ø 0,6…0,8 мм')?></h5>
            <h5 class="uk-margin-small">- <?=__('ДЛЯ ПРОТИРАНИЯ  КОСТОЧКОВЫХ ПЛОДОВ, отв. Ø 3..5 мм')?></h5>
        </div>
         <div class="uk-width-auto uk-margin-medium-top">
            <?= $this->Html->image('sito.png')?>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
