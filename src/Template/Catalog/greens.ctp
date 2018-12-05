<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('potatoes.png',['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Свежие овощи и фрукты')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build("/") ?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Свежие овощи и фрукты')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-container uk-padding-small uk-margin uk-overflow-auto" style="background-color: white">
        <div class="uk-overflow-auto">
             <table class="uk-table uk-table-divider uk-table-hover">
                <thead>
                    <tr>
                        <th><?=__('Наименование')?></th>
                        <th><?=__('Фото')?></th>
                        <th>**<?=__('Объем')?></th>
                        <th><?=__('Упаковка')?></th>
                        <th><?=__('Примечание')?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="uk-text-middle"><?=__('Чеснок')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/gr1.jpg')?>" data-fancybox="group2">
                                <?= $this->Html->image('gr1.jpg',['style'=>'height:150px'])?>
                            </a>
                        </td>
                        <td class="uk-text-middle"><?=__('До')?> 100-200 <?=__('тонн')?></td>
                        <td class="uk-text-middle"><?=__('25-30 кг мешки или по желанию клиента')?></td>
                        <td class="uk-text-middle">
                            <?=__('Калибр: 7-12 зубчиков.Сорт французский Теодор')?>
                        </td>
                   </tr>
                   <tr>
                        <td class="uk-text-middle"><?=__('Картофель')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/gr2.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('gr2.png',['style'=>'height:150px'])?>
                            </a>
                        </td>
                       <td class="uk-text-middle"><?=__('От')?> 100 <?=__('тонн и выше')?></td>
                       <td class="uk-text-middle"><?=__('По желанию клиента')?></td>
                       <td class="uk-text-middle"><?=__('Голландские сорта')?></td>
                   </tr>
                   <tr>
                        <td class="uk-text-middle"><?=__('Лук')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/gr3.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('gr3.png',['style'=>'height:150px'])?>
                            </a>
                        </td>
                       <td class="uk-text-middle"><?=__('От')?> 100 <?=__('тонн и выше')?></td>
                       <td class="uk-text-middle"><?=__('По желанию клиента')?></td>
                       <td class="uk-text-middle"></td>
                   </tr>
                   <tr>
                       <td class="uk-text-middle"><?=__('Морковь')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/gr4.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('gr4.png',['style'=>'height:150px'])?>
                            </a>
                        </td>
                       <td class="uk-text-middle"><?=__('До 100 тонн')?></td>
                       <td class="uk-text-middle"><?=__('По желанию клиента')?></td>
                       <td class="uk-text-middle"></td>
                   </tr>
                   <tr>
                       <td class="uk-text-middle"><?=__('Сахарная свекла')?></td>
                        <td>
                            <a href="<?= $this->Url->assetUrl('/img/gr5.png')?>" data-fancybox="group2">
                                <?= $this->Html->image('gr5.png',['style'=>'height:150px'])?>
                            </a>
                        </td>
                       <td class="uk-text-middle"><?=__('От')?> 100 <?=__('тонн и выше')?></td>
                       <td class="uk-text-middle"><?=__('По желанию клиента')?></td>
                       <td class="uk-text-middle"></td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="uk-panel">
        <h3 class="uk-text-lead"><?=__('Картофелеводство')?></h3>
        <h5 class="uk-margin-small-top"><?=__('Картофель — важнейший продукт питания, занимающий второе место после хлеба. Почвенно-климатические условия позволяют возделывать картофель повсеместно, в тёплых регионах — ранние, а в горных — обычные сорта картофеля.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('В Кыргызстане картофель начали культивировать в 60-е годы 19 века. В советское время производство картофеля в республике увеличилось. Значительное развитие оно получило после приобретения независимости республикой. В настоящее время по размерам посевной площади и валовому сбору картофеля республика занимает первое место среди республик Центральной Азии.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Основные посевы картофеля размещены в Иссык-Кульской области, в горных зонах Ферганской долины и в Кеминском районе Чуйской области. В последние годы широкое распространение получило картофелеводство в Нарынской и Таласской областях. В 2000 площадь его посадки составляла 68,9 тыс. га, при урожайности 150,9 ц/га, получен валовой сбор — 1045,5 тыс.т.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Рост валового сбора картофеля в 3,2 раза до стигнут за счёт увеличения посевных площадей в 2,9 раза, и за счёт урожайности на 30%. Главное в перспективе развития отрасли — это перевод семеноводства картофеля на безвирусную основу. При меристемном способе выращивания, по расчётам учёных и специалистов, повысится его урожайность, как минимум в 2,5 раза.')?></h5>
    </div>
    <div class="uk-panel">
        <h3 class="uk-text-lead"><?=__('Овощеводство')?></h3>
        <h5 class="uk-margin-small-top"><?=__('При посеве овощных культур используются качественные сорта семян. В Чуйской долине и на юге Кыргызстана выращиваются семена теплолюбивых овощных куль тур (огурцов, томатов, перцев, баклажанов, лука). В горной зоне (Иссык-Кульской котловине, Внутреннем Тенир-Тоо, Таласской долинах) выращиваются семена раннеспелых овощей капусты, овощных корнеплодов, редиса, бобовых и др. В республике возделывается 20 видов овощных культур.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('В 2000 по республике посевная площадь овощей составляла 46,9 тыс. га, что на 27,4 тыс. га больше по сравнению с 1991. Объём производства овощей за 10 лет возрос более чем в 2 раза, и в 2000 произведено 746,8 тыс. т овощей и 65,3 тыс. т бахчевых куль тур, что позволило обеспечить потребность населения в овощах в свежем виде и перераба тывать овощную продукцию для поставки её на экспорт. Увеличение валового сбора овощей в основном получено за счёт расширения посевных площадей в 2,4 раза.')?></h5>
    </div>
    <h5><?=__('Наша компания имеет возможность поставлять свежие овощи и фрукты в объемах до 500 тн в год. Также имеется возможность доставки продукции автотранспортным и железнодорожным путями в кратчайшие сроки в страны СНГ и Европы. Упаковку товара можем сделать по желанию наших клиентов(в коробках, в мешках ). С нашей стороны будут предоставлены все необходимые документы на всю продукцию. ')?></h5>
    <h5 class="uk-margin-small-top">1.	<?=__('Фитосанитарные сертификаты ')?></h5>
    <h5 class="uk-margin-small-top">2.	<?=__('Декларация соответствие ЕАС')?></h5>
    <h5 class="uk-margin-small-top">3.	<?=__('Сертификат происхождения')?></h5>
    <h5 class="uk-margin-small-top">4.	<?=__('Таможенная декларация')?></h5>
    <h5 class="uk-margin-small-top">5.	<?=__('Вся транспортная документация на продукцию.')?></h5>
    <h5 class="uk-margin-small-top">6.	<?=__('Контракты на поставку')?></h5>
</div>
<?= $this->element('footer')?>