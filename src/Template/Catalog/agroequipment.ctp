<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('tractor.png', ['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-visible@m uk-margin-small-left uk-light"><?=__('Сельхозтехника и сельскохозяйственное оборудование')?></span>
        <span class="uk-heading-primary uk-hidden@m uk-margin-small-left uk-light"><?=__('Сельхозтехника')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Каталог')?></a></li>
        <li class="uk-visible@m"><span><?=__('Сельхозтехника и сельскохозяйственное оборудование')?></span></li>
        <li class="uk-hidden@m"><span><?=__('Сельхозтехника')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin-top">
    <div class="panel uk-text-center uk-margin">
        <h5 class="uk-margin-small-top uk-text-lead"><?=__('Жатка для уборки подсолнечника')?> FAST STREAM FS-6;7,4;9,1О</h5>
         <?= $this->Html->image('oborud1.png')?>
    </div>
    <div class="uk-panel">
        <h5><?=__('ОсОО «Фалкон Групп» в сотрудничестве с ООО «Мелитопольской агропромышленной компанией»  предлагают уникальную жатку с пассивной подачей для уборки подсолнечника, которая благодаря своим революционным техническим решениям гарантированно обеспечивает систему сбора урожая с высокой продуктивностью и отсутствием потерь. Эта жатка позволяет убрать подсолнечник в максимально сжатые сроки, а значит обеспечить меньшую зависимость от атмосферных осадков и лучшее качество убранного материала.')?></h5>
        <h5><?=__('Агрегатируется на все виды комбайнов.')?></h5>
    </div>
    <div class="uk-container uk-margin uk-padding" style="background-color: white">
       <h4 class="uk-text-center uk-margin-bottom"><?=__('ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ')?></h4>
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-divider uk-table-hover uk-table-justify uk-text-center">
                    <thead>
                        <tr>
                            <th class="uk-text-center"><?=__('Модель')?> FS-6</th>
                            <th class="uk-text-center"><?=__('Модель')?> FS-7,4</th>
                            <th class="uk-text-center"><?=__('Модель')?> FS-9,1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uk-text-middle"><?=__('Для комбайна мощностью до 250 л.с.')?></td>
                            <td class="uk-text-middle"><?=__('Для комбайна мощностью до 350 л.с.')?></td>
                            <td class="uk-text-middle"><?=__('Для комбайна мощностью до 350 л.с.')?></td>
                        </tr>
                        <tr>
                            <td class="uk-text-middle"><?=__('Эффективная ширина захвата')?> – 6,0 м</td>
                            <td class="uk-text-middle"><?=__('Эффективная ширина захвата')?> – 7,4 м</td>
                            <td class="uk-text-middle"><?=__('Эффективная ширина захвата')?> – 9,4 м</td>
                        </tr>
                        <tr>
                            <td class="uk-text-middle"><?=__('Длина')?> – 6,2 м</td>
                            <td class="uk-text-middle"><?=__('Длина')?> – 7,6 м</td>
                            <td class="uk-text-middle"><?=__('Длина')?> – 9,6 м</td>
                        </tr>
                        <tr>
                            <td class="uk-text-middle"><?=__('вес')?> – 1680 <?=__('кг')?></td>
                            <td class="uk-text-middle"><?=__('вес')?> – 2180 <?=__('кг')?></td>
                            <td class="uk-text-middle"><?=__('вес')?> – 2780 <?=__('кг')?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <div class="uk-list uk-list-bullet uk-margin-medium-top">
            <li><h5><?=__('Межосевое расстояние между делителями')?> – 225 мм</h5></li>
            <li><h5><?=__('Привод режущего аппарата – планетарный редуктор по типу «Shumacher»')?></h5></li>
            <li><h5><?=__('Скорость движения режущего ножа')?> – <?=__('более')?> 700 <?=__('срезов в минуту')?></h5></li>
            <li><h5><?=__('Диаметр спирали шнека')?> – 540 мм, <?=__('шаг между витками спирали шнека')?> – 500 мм</h5></li>
            <li><h5><?=__('Диаметр центральной несущей трубы шнека')?> – 250 мм</h5></li>
            <li><h5><?=__('Скорость вращения шнека')?> –176 <?=__('оборотов в минуту')?></h5></li>
            <li><h5><?=__('Высота')?> – 1,1 м, <?=__('ширина')?> – 2,34м</h5></li>
        </div>
    </div>
    <div class="panel uk-text-center uk-margin-large uk-margin-xlarge-top">
        <h5 class="uk-margin-small-top uk-text-lead"><?=__('Жатка зернобобовая ЖБВ 5')?></h5>
        <?= $this->Html->image('oborud2.png')?>
    </div>
    <div class="uk-panel">
        <h5><?=__('Жатка зернобобовая ЖБВ 5 предназначена для скашивания в валок зернобобовых культур с укладкой во встречно-поточный валок.')?></h5>
        <h5><?=__('Жатка оборудована ременно-планчатыми транспортером, резальным аппаратом повышенной скорости резания, противонамотчным мотовилом. Жатка имеет новое эксцентриковое противонамоточное мотовило, полностью исключающее наматывание на граблины растительной массы.')?></h5>
        <h5><?=__('Шатунная группа привода режущего аппарата перенесена на зоны резания в заднюю часть жаток, что позволило снизить порожек между режущим аппаратом и транспортером. ')?></h5>
        <h5><?=__('Скорость резания увеличилась в 1,7 раза.')?></h5>
        <h5><?=__('Агрегатируется с энергосредствами КПС 5Г, Е 031,303')?></h5>
    </div>
    <div class="uk-container" style="color: black">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Ширина захвата м')?></div>
            <div>5</div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Производительность за 1 час чистой работы при скорости движения 9 км/ч*')?></div>
            <div>4,5<?=__('га/час')?></div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Скорость резания  ход/мин')?></div>
            <div>600</div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Рабочая скорость движения, км/ч')?></div>
            <div><?=__('до')?> 9</div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Транспортная скорость')?></div>
            <div><?=__('до')?> 20 <?=__('км/час')?></div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Масса, кг')?></div>
            <div>1200</div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Срок службы, лет')?></div>
            <div><?=__('не менее')?> 8</div>
        </div>
    </div>
    <div class="panel uk-text-center uk-margin-large uk-margin-xlarge-top">
        <h5 class="uk-margin-small-top uk-text-lead"><?=__('Жатка прицепная ЖВП 4,9')?></h5>
        <?= $this->Html->image('oborud3.png')?>   
    </div>
    <div class="uk-panel">
        <h5><?=__('Жатка ЖВП-4,9 предназначена для скашивания зерновых культур в валок, особенно в высокоурожайных зонах для оптимальной загрузки на подборе валков комбайнов класса «Нива», «Нью Холанд», «Бизон», «Обрій».')?></h5>
        <h5><?=__('Жатка оборудована: эксцентриковым мотовилом новой конструкции, исключающей наматывание срезанной массы, ременно-планчатым транспортером, устройством нетрудоемкого перевода жатки без отсоединения от трактора и перестановки колес.')?></h5>
        <h5><?=__('Обеспечивает укладку оптимального по своей мощности валка хорошего качества, высокую производительность, обеспечивает условия труда механизатора. Применение жатки позволяет снизить затраты на различную уборку за счет использования трактора МТЗ вместо комбайна, высвободить часть комбайнов от агрегатирования с валковыми жатками, загрузить тракторный парк вовремя уборки.')?></h5>
        <h5><?=__('Агрегатируется с тракторами ЮМЗ-6, МТЗ-80/82.')?></h5>
    </div>
    <div class="uk-container uk-margin" style="color: black">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Ширина захвата')?></div>
            <div>4,9 м</div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Производительность')?></div>
            <div><?=__('до')?> 4 <?=__('га/ч')?></div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Рабочая скорость движения')?></div>
            <div>2-10 <?=__('км/час')?></div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Транспортная скорость')?></div>
            <div>20 <?=__('км/час')?></div>
        </div>
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand" uk-leader="fill: -"><?=__('Масса')?></div>
            <div>1545 <?=__('кг')?>.</div>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
