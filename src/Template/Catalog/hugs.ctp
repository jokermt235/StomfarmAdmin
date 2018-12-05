<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('horse.png',['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Мягкие игрушки')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Мягкие игрушки')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-panel uk-margin-large">
        <h5><?=__('2018 году наша компания выиграла тендер, организованный Программой Развития ООН (ПРООН) и стала главным поставщиком мягких игрушек Снежного Барса, который является символом Игр Кочевников в 2018 году. Кроме мягких игрушек Снежного Барса, у нас вы можете также приобрести мягкие игрушки Касым и Арууке, сшитых в национальном стиле по новейшей технологии, из качественных материалов, которые полностью безвердны для детей. Данные куклы имеют сертификат качества Кыргызской Республики и предназначены для детей в возрасте от 2-х лет и выше. А также эти игрушки можно использовать в виде сувениров. При изготовлении игрушек был использован материал «Фетр». Фетр – это цветной войлок, плотный материал из валяной шерсти или из синтетеических волокон.  Изготовливается обчно в виде полотнищ, которые имеют различную толщину, в зависимости от назначения. Сорт войлока, изготавливаемые из тонкого пуха кроликов или коз, известны под названием Фетр (от фр. Feutre).')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Размер одной игрушки Касым и Арууке: 30 см')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Размер упаковки одной игрушки : 125х90х330')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Размер упаковки одной пары игрушек : 250х90х330')?></h5>
        <h5 class="uk-text-bold"><?=__('Цены :')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Одна игрушка с упаковкой : 400 сом')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Одна пара игрушек с упаковкой : 800 сом')?></h5>
    </div>
    <div class="panel">
        <div class="uk-grid">
            <div>
                <?= $this->Html->image('t1.png',['width'=>200, 'height'=>100, 'class'=>'uk-margin-small-bottom'])?>
            </div>
            <div>
                <?= $this->Html->image('t2.png',['width'=>200, 'height'=>100, 'class'=>'uk-margin-small-bottom'])?>
            </div>
            <div>
                <?= $this->Html->image('t3.png',['width'=>100, 'height'=>100, 'class'=>'uk-margin-small-bottom'])?>
            </div>
            <div>
                <?= $this->Html->image('t4.png',['width'=>100, 'height'=>100, 'class'=>'uk-margin-small-bottom'])?>
            </div>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
