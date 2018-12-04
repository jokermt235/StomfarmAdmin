<?= $this->element('top_menu');?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('apricot.png',['class'=>'uk-margin'])?>
        <span class="uk-heading-primary uk-margin-small-left uk-light"><?=__('Сухофруты')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build("/")?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Сухофруты')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-panel uk-margin-large">
        <h2 class="uk-text-lead"><?=__('Курага (Сушеный абрикос)')?></h2>
        <h5><?=__('Производство абрикоса по республике в среднем в год составляет более 60 тыс. тонн, из них более 80% производится в Баткенской области, около 10% в Иссык-Кульской области. Переработка в виде соков, варенья, джемов и пюре и экспорт свежего Баткенского абрикоса  составляет всего около 15% от произведенного сырья, 80% этого продукта реализуется в виде сухофруктов (которые обладают  лечебными свойствами).')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Баткенский абрикос известен далеко за пределами Кыргызстана. Ведь именно здесь выращивают множество сортов урюка, переработанный и высушенный вид которого экспортируется в страны СНГ и дальнего забурбежья. Иссык-кульский абрикос в основном реализуется в свежем виде внутри республики (в частности г. Бишкек) и экспортируется в Россию и Казахстан. По данным Центра конкурентоспособности агробизнеса,  наш абрикос на внешних рынках можно реализовать дороже более двух раз, что обусловлено качеством продукции, высоким содержание витаминов и экологической чистотой продукции.')?></h5>
        <h2 class="uk-text-lead"><?=__('Чернослив (Сушеный чернослив)')?></h2>
        <h5><?=__('Плоды сливы богаты солями калия, их в 100 г плодов до 214 мг. Калий обладает важными физиологическими свойствами, так как он участвует в процессе передачи нервных импульсов, способствует сокращению мышц, поддерживает сердечную деятельность и кислотно-щелочной баланс в человеческом организме. 
        В лечебных целях сливы включают в рацион больных с заболеваниями кишечника, которые сопровождаются запорами, а также при подагре, болезнях почек, печени и сердца. Слива показана для повышения секреции желудочного сока и аппетита, а также при атеросклерозе.
        Плоды сливы также как и листья содержат кумарины, вещества способные предупреждать образование тромбов на стенках кровеносных сосудов, излечивать тромбозы, расширять коронарные сосуды.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Переваривается организмом слива легко, ее плоды способствуют образованию кровяных телец, прочищению желудка, расслаблению нижнего пищеварительного тракта. Особенно эффективны сливы при терапии заболеваний, связанных с избытком желчи. Укрепляя печень, сливы способствуют очищению крови и выведению из организма токсинов. В пищу употребляются как свежие, так и сушеные сливы, сушеные в свою очередь способствуют понижению высокой температуры тела.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Аксыйский район славится сливой и расположен на 294 000 га земли, из которых 94% составляют горы. Основное направление в сельском хозяйстве - выращивание чернослива. Ежегодный объем урожая свежей черной сливы достигает до 25 тысяч тонн. Чернослив растет на 2000 га земли. Ала-букинский район, соседний с Аксы, имеет потенциал выращивания сливы в 10 000 тонн ежегодно.')?></h5>
    </div>
    <div class="uk-container uk-padding-small uk-margin" style="background-color: white">
         <div class="uk-overflow-auto">
                <table class="uk-table uk-table-divider uk-table-hover">
                    <thead>
                        <tr>
                            <th><?=__('Наименование')?></th>
                            <th><?=__('Фото')?></th>
                            <th><?=__('Период Продаж (в сушеном виде)')?></th>
                            <th><?=__('Калибр')?></th>    
                            <th><?=__('Объемы поставки нашей компании')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=__('Курага традиционная (Сушеный абрикос) – без косточки')?></td>
                            <td>
                                <?= $this->Html->image('df1.png',['style'=>"height:170px"])?>
                            </td>
                            <td><?=__('Август-декабрь')?></td>
                            <td>100-500</td>
                            <td><?=__('500 гр вакуумные упаковки в 10 кг коробках')?></td>
                        </tr>
                        <tr>
                            <td><?=__('Курага органическая (Сушеный абрикос)-без косточки')?></td>
                            <td>
                                <?= $this->Html->image('df2.png',['style'=>"height:170px"])?>
                            </td>
                            <td><?=__('Август-декабрь')?></td>
                            <td>100-200</td>
                            <td><?=__('500 гр вакуумные упаковки в 10 кг коробках')?></td>
                        </tr>
                        <tr>
                            <td><?=__('Чернослив с косточкой (Сушеный чернослив)')?></td>
                            <td>
                                <?= $this->Html->image('df3.png',['style'=>"height:170px"])?>
                            </td>
                            <td><?=__('Октябрь-декабрь')?></td>
                            <td>1000</td>
                            <td><?=__('5 или 10 кг вакуумные упаковки в коробках')?></td>
                        </tr>
                    </tbody>
                </table>
         </div>
    </div>
    <h5><?=__('Наша компания имеет возможность поставлять сушеную курагу и чернослив в любую точку мира в объемах до 1000 тн в год. Также имеется возможность доставки продукции автотранспортным и железнодорожным путями в кратчайшие сроки в страны СНГ и Европы. Упаковку товара можем сделать по желанию наших клиентов(в коробках, в мешках, вакуумные). С нашей стороны будут предоставлены все необходимые документы на всю продукцию.')?></h5>
    <h5 class="uk-margin-small-top">1.	<?=__('Фитосанитарные сертификаты ')?></h5>
    <h5 class="uk-margin-small-top">2.	<?=__('Декларация соответствие ЕАС')?></h5>
    <h5 class="uk-margin-small-top">3.	<?=__('Сертификат происхождения')?></h5>
    <h5 class="uk-margin-small-top">4.	<?=__('Таможенная декларация')?></h5>
    <h5 class="uk-margin-small-top">5.	<?=__('Вся транспортная документация на продукцию.')?></h5>
    <h5 class="uk-margin-small-top">6.	<?=__('Контракты на поставку')?></h5>
</div>
<?= $this->element('footer')?>