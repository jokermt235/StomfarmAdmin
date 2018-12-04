<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('flower.png',['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Лекарственные растения,плоды и ягоды')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="index.html"><?=__('Каталог')?></a></li>
        <li><span><?=__('Лекарственные растения,плоды и ягоды')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-panel uk-margin-large">
        <h5><?=__('Зверобой, мята, чабрец, валериана, пустырник, боярышник, шиповник, мать-и-мачеха, душица, подорожник, можжевельник, береза, василек, ромашка... Весь этот список щедр представлен в Кыргызстане.')?></h5>
        <h5><?=__('Растительность лесо-луго-степной зоны — настоящая «зеленая аптека». Здесь можно встретить валериановый корень, не уступающий лучшим тюрингским сортам. Сильным успокаивающим действием, в восемь-десять раз превосходящим действие валерианы, обладает синюха голубая— травянистое растение с прямостоящими стеблями и мелкими ярко-синими душистыми цветами с колокольчатым венчиком. Мать-и-мачеха добирается иногда до субальпийского пояса. Отвары из нее, как известно, применяются при заболеваниях легких и бронхов. Алтей, шалфей, зверобой, ревень, череда, лекарственный тимьян — найти их на горных склонах и в ущельях не составит труда.')?></h5>
        <h5><?=__('Повсюду в луго-лесной зоне растет всем известная мята. Ее листья и цветки содержат масло, которое широко применяется в кондитерской промышленности и в медицине. Хозяйки добавляют ее в чай, при приготовлении различных блюд, кладут в соления. В народной медицине мята широко применяется как желчегонное и болеутоляющее средство, а также для расширения сосудов сердца и головного мозга. Много мятного масла содержится также в душице (зизифоре), которую используют в медицине и парфюмерии.')?></h5>
        <h5><?=__('Облепиха, пожалуй, нигде в мире не встречается в таких количествах, как на Тянь-Шане. Ее золотистые ягоды, отдаленно напоминающие по вкусу ананас, густо облепливают усыпанными острыми колючками ветки кустарника. По количеству содержащихся в них витаминов эти, ягоды не имеют себе равных. Из них можно сварить варенье, кисель, приготовить сок, но лучше всего перетереть их с сахаром, тогда сохранится естественный вкус и не разрушатся витамины. Из семян облепихи изготавливают масло, незаменимое при лечении ожогов, ран, язвенных болезней желудка и других заболеваний.')?></h5>
        <h5><?=__('Скажем также о барбарисе, поскольку и его не отнесешь к растениям, широко распространенным в других регионах СНГ. Это колючий очень ветвистый кустарник с красными или фиолетовыми ягодами с продолговатой косточкой, согревающими в сентябре-октябре. Ягоды с кислинкой приятны на вкус и содержат большое количество витаминов С. Их с самой глубокой древности используют в пищу, а также как жаждоутоляющее средство и как целебное средство для возбуждения аппетита, понижения жара, при расстройстве кишечника. Из барбариса варят кисель, варенье, джем, делают морсы или просто сушат его.')?></h5>
    </div>
    <div class="panel">
        <div class="uk-overflow-auto">
             <table class="uk-table uk-table-divider uk-table-hover uk-table-responsive" style="background-color: white">
                <thead>
                    <tr>
                        <th class=""><?=__('Наименование')?></th>
                        <th class="uk-width-small"><?=__('Фото')?></th>
                        <th class="uk-width-small"><?=__('Калибр')?></th>
                        <th class="uk-table-expand"><?=__('Период Продаж (в сушеном виде)')?></th>
                        <th class="uk-table-expand"><?=__('Объемы поставки нашей компании')?></th>
                        <th class="uk-width-small"><?=__('Упаковка')?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="uk-text-middle"><?=__('Барбарис листья')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh1.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh1.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные плоды')?></td>
                        <td class="uk-text-middle"><?=__('Август - сентябрь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Мята перечная')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh2.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh2.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Июнь-сентябрь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Пустырник')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh3.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh3.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Июль- август')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Календула бархатца')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh4.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh4.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Май-ноябрь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Шалфей')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh5.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh5.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Июль-август')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Чабрец')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh6.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh6.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Август')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Череда (Bidens tripartita L.)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh7.jpg")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh7.jpg',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Август')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Корень Валерианы')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh8.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh8.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные корни')?></td>
                        <td class="uk-text-middle"><?=__('Сентябрь-октябрь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Душица (origanum tittantrum)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh9.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh9.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Сентябрь-январь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Зверобой (Hypericum Perforatum)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh10.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh10.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td class="uk-text-middle"><?=__('Июнь- август')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Крапива (Urtica dioica)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh12.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh12.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Сушеные листья')?></td>
                        <td><?=__('Май-сентябрь')?></td>
                        <td><?=__('До')?> 5 <?=__('тонн')?></td>
                        <td><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Шиповник (Rosa Canina)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh13.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh13.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('0,5 см – 1 см')?></td>
                        <td class="uk-text-middle"><?=__('Сентябрь-январь')?></td>
                        <td class="uk-text-middle"><?=__('До')?> 100 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Боярышник (Crataegus songarica, Crataegus Korolkovii)')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh14.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh14.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('0,5см – 1 см')?></td>
                        <td class="uk-text-middle"><?=__('Октябрь-декабрь')?></td>
                        <td class="uk-text-middle"><?=__('До') ?> 100 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                     <tr>
                        <td class="uk-text-middle"><?=__('Сушеные дикие яблоки')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl("/img/mh15.png")?>" data-fancybox="group2">
                                <?= $this->Html->image('mh15.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Дольки, от 1см до 2см')?></td>
                        <td class="uk-text-middle"><?=__('Август-декабрь')?></td>
                        <td class="uk-text-middle"><?=__('100 тонн и выше')?></td>
                        <td class="uk-text-middle"><?=__('10 кг картонные коробки')?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->element('footer')?>
