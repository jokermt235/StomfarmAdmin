<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('jelly-beans.png',['class'=>'uk-margin-small']);?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Фасоль')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Фасоль')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-panel uk-margin-large">
        <h5><?=__('Фасоль из Кыргызстана экспортируются во многие страны, включая Турцию, Болгарию, Сербию, Македонию, Албанию, Индию, Иран и другие страны Европы и Азии и является одной из наиболее важных культур для экспорта Кыргызстана. Более 90% фасоли- около 90 000 тонн- выращиваются на территории Таласской области Кыргызстана. Благоприятный климат Таласской области позволяет выращивать  высокачественную фасоль, которая отличается вкусом, калорией и высоким содержанием питательных веществ. Название фасоли произведенной в Кыргызстане в Турции называют Чалы Фасоль (Çalı Fasülye), а в Балканских странах «Тетовач» (Tetovac).')?></h5>
        <h5><?=__('С 2014 года ОсОО «Фалкон Групп» помогло сотням фермерам Кыргызстана экспортировать более 1000 тонн фасоли сорта Лопатка, Томатная и Рябая в Россию, Украину, Турцию, Иран и другие страны ближнего и дальнего зарубежья. У нас имеется цех по калибровке и сортировке фасоли, а также у нас налажены контакты с самыми лучшими фермерами Таласской области, которые выращивают фасоль, отвечающую самым высоким стандартам. Они доверяют нам, потому что знают, что наша компания работает на международном рынке и ценят такие качества как добросовестность, открытость и трудолюбивость. Сезон нового урожая фасоли в Кыргызстане начинается ежегодно в начале сентября, а продажа готовой продукции длится до следующего урожая.')?></h5>
        
        <h5><?=__('Ниже перечилены спецификации сортов фасоли, произведенных в Кыргызстане.')?></h5>
        <p class="uk-text-bold">*<?=__('Калибры')?>:</p>
        <p><?=__('Под комбайн	: Не очищенная фасоль, все калибры перемешаны, сорность составляет около 3%-4%, из под комбайна')?></p>
        <p><?=__('Натурал 	: Очищенная и сортированная, но не калиброванная фасоль')?></p>
        <p><?=__('Калибр 7,8,9	: Калиброванная по размеру фасоль.')?></p>
        <p class="uk-text-bold">**<?=__('Объем')?>:</p>
        <p><?=__('Объемы по фасоли указаны по всей Таласской области Кыргызстана и указывает примерное количество.')?></p>
    </div>
    <div class="panel">
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-divider" style="background-color: white;">
                <thead>
                    <th class="uk-width-small"><?=__('Наименование')?></th>
                    <th class="uk-width-expand"><?=__('Фото')?></th>
                    <th class="uk-width-small">*<?=__('Калибр')?></th>
                    <th class="uk-width-small"><?=__('Шт/100 гр.')?></th>
                    <th class="uk-width-small">**<?=__('Объем')?></th>
                    <th class="uk-width-small"><?=__('Упаковка')?></th>
                </thead>
                <tbody>
                    <tr>
                        <td class="uk-text-middle"><?=__('Фасоль  белая Сорт «Лопатка»')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/F1.jpg')?>" data-fancybox="group2">
                                <?= $this->Html->image('F1.jpg',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Под комбайн, Натурал (mix)')?>, 7,8,9</td>
                        <td class="uk-text-middle"><?=__('140-240')?></td>
                        <td class="uk-text-middle"><?=__('около')?> 50 000 <?=__('тонн')?></td>
                        <td class="uk-text-middle">25-50 <?=__('кг')?> <?=__('мешки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Фасоль  красная Сорт «Томатный»')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/F2.jpg')?>" data-fancybox="group2">
                                <?= $this->Html->image('F2.jpg',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Под комбайн, Натурал  (mix)')?></td>
                        <td class="uk-text-middle">305-315</td>
                        <td class="uk-text-middle"><?=__('около')?> 10 000-15000 <?=__('тонн')?></td>
                        <td class="uk-text-middle">25-50 <?=__('кг')?> <?=__('мешки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Фасоль  сорт «Рябая»')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/f3.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('f3.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Под комбайн, Натурал (mix)')?></td>
                        <td class="uk-text-middle">185-190</td>
                        <td class="uk-text-middle"><?=__('около')?> 5000-10000 <?=__('тонн')?></td>
                        <td class="uk-text-middle">25-50 <?=__('кг')?> <?=__('мешки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Фасоль  сорт «Сахарная»')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/f4.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('f4.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>    
                        <td class="uk-text-middle"><?=__('Под комбайн, Натурал (mix)')?></td>
                        <td class="uk-text-middle">200-205</td>
                        <td class="uk-text-middle"><?=__('около')?> 3000-5000 <?=__('тонн')?></td>
                        <td class="uk-text-middle">25-50 <?=__('кг')?> <?=__('мешки')?></td>
                    </tr>
                    <tr>
                        <td class="uk-text-middle"><?=__('Фасоль  сорт «Юбка»')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/f5.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('f5.png',['height'=>100, 'width'=>100])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('Под комбайн, Натурал (mix)')?></td>
                        <td class="uk-text-middle">170-180</td>
                        <td class="uk-text-middle"><?=__('около')?> 1000-3000 <?=__('тонн')?></td>
                        <td class="uk-text-middle">25-50 <?=__('кг')?> <?=__('мешки')?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel uk-margin-top">
        <h5><?=__('Наша компания имеет возможность поставлять любой вид фасоли в любую точку мира в объемах до 1000 тн в год. Также имеется возможность доставки продукции автотранспортным и железнодорожным путями в кратчайшие сроки в страны СНГ и Европы. Упаковку товара можем сделать по желанию наших клиентов(25 кг или 50 кг мешки).')?></h5>
        <h5><?=__('С нашей стороны будут предоставлены все необходимые документы на всю продукцию.')?></h5>
        <h5 class="uk-margin-small-top">1.	<?=__('Фитосанитарные сертификаты ')?></h5>
        <h5 class="uk-margin-small-top">2.	<?=__('Декларация соответствие ЕАС')?></h5>
        <h5 class="uk-margin-small-top">3.	<?=__('Сертификат происхождения')?></h5>
        <h5 class="uk-margin-small-top">4.	<?=__('Таможенная декларация')?></h5>
        <h5 class="uk-margin-small-top">5.	<?=__('Вся транспортная документация на продукцию.')?></h5>
        <h5 class="uk-margin-small-top">6.	<?=__('Контракты на поставку')?></h5>
    </div>
</div>
<?= $this->element('footer')?>
