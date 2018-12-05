<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <?= $this->Html->image('ecology.png',['class'=>'uk-margin-small'])?>
        <span class="uk-heading-primary uk-text-bottom uk-margin-small-left uk-light"><?=__('Рассады')?></span>
    </div>
    <ul class="uk-breadcrumb" style="padding: 0 0 0 70px;">
        <li><a href="<?= $this->Url->build('/')?>"><?=__('Каталог')?></a></li>
        <li><span><?=__('Рассады')?></span></li>
    </ul>
</div>
<div class="uk-panel uk-padding-large uk-margin-large-bottom uk-margin">
    <div class="uk-panel uk-margin-large">
        <h3 class="uk-text-lead"><?=__('СЕМЕНА  КАРТОФЕЛЯ')?></h3>
        <h5 class="uk-margin-small-top"><?=__('Высококачественные голландские семена картофеля первой репродукции. 
        Голландские сорта картофеля, как правило, устойчивы к вирусам, разнообразным патогенным типам картофельной нематоды и рака, некоторые ‒ не боятся парши обыкновенной. А вот фитофтороз поражает ботву этих культур не так уж и редко, зато их клубни устойчивы к этому заболеванию')?></h5>
        <div class="uk-grid uk-child-width-expand@s">
            <div>
                <a href="<?= $this->Url->assetUrl('pot1.jpg')?>" data-fancybox="group2">
                    <?= $this->Html->image('pot1.jpg')?>
                </a>
            </div>
            <div>
                <a href="<?= $this->Url->assetUrl('pot2.webp')?>" data-fancybox="group2">
                    <?= $this->Html->image('pot2.webp')?>
                </a>
            </div>
            <div>
                <a href="<?= $this->Url->assetUrl('pot3.jpg')?>" data-fancybox="group2">
                    <?= $this->Html->image('pot3.jpg')?>
                </a>
            </div>
            <div>
                <a href="<?= $this->Url->assetUrl('pot4.webp')?>" data-fancybox="group2">
                    <?= $this->Html->image('pot4.webp')?>
                </a>
            </div>
        </div>
        <h3 class="uk-text-lead"><?=__('РАССАДЫ')?></h3>
        <h5 class="uk-margin-small-top"><?=__('Не только в у нас в Кыргызстане, но и во всем мире начинающим огородникам и тепличникам  кажется, что нет ничего проще, чем вырастить рассаду. А услышав и увидев на рынках высокие цены на готовую рассаду они часто удивляются.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Дело в том, что вырастить крепкую и здоровую рассаду — очень  трудоемкий процесс, требующий сил, времени и многолетних знаний. Многие начинающие теплицники Кыргызстане делают целый ряд распространенных ошибок, которые могут поставить под угрозу их урожай.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('Многих интересует вопрос, а зачем нужна заказывать кому-то рассаду, если они сами, тепличники,  могут посадить их прямо в грунт, где семена прекрасно всходят. Такой подход будет эффективным только для тех растений, у которых крупные семена и довольно сильные ростки. Соответственно, чем меньше зернышки, тем больше опасностей их подстерегает. Их могут забить сорняки или уничтожить вредители. Правильное выращивание рассады даст сильные и развитые корни растению, а также возможность получить богатый урожай раньше на 10-15 дней. При этом не тратя свои средства на покупку химикатов для борьбы с болезнями и вредителями.')?></h5>
        <h5 class="uk-margin-small-top"><?=__('У нас вы можете заказать или приобрести рассады разных видов овощей как для выращивания в теплице, так и для выращивания в открытом грунте. Семена можете предоставить свои: голландские, турецкие или российские. Кроме этого мы можем предложить свои семена.  Агроном с 30-летним стажем вырастит необходимую Вам рассаду, в нужном количестве и в необходимые сроки. Используемые основные материалы и удобрения для подготовки рассады это- Торф, перлит и вермикулит. Наш агроном обеспечит Ваши растения необходимыми питательными веществами в течение всего периоду развития рассады.')?></h5>
    </div>
    <div class="uk-container uk-padding-small" style="background-color: white;">
        <div class="uk-overflow-auto">
              <table class="uk-table uk-table-hover uk-table-divider">
                <thead>
                    <th><?=__('Наименование рассады')?></th>
                    <th><?=__('Период подготовки рассады (дни)(летнее время)')?></th>
                    <th><?=__('Стоимость услуг сом/1шт (летний период)')?></th>
                    <th><?=__('Период подготовки рассады (дни) (зимнее время)')?></th>
                    <th><?=__('Стоимость услуг сом/ 1шт (зимний период)')?></th>
                </thead>
                <tbody>
                    <tr>
                        <td><?=__('Огурцы')?></td>
                        <td>20 <?=__('дней')?></td>
                        <td>7 <?=__('сом')?></td>
                        <td>От 35-40</td>
                        <td>13 <?=__('сом')?></td>
                    </tr>
                    <tr>
                        <td><?=__('Томаты')?></td>
                        <td>40</td>
                        <td>7</td>
                        <td>50</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td><?=__('Листья салата')?></td>
                        <td>30</td>
                        <td>8</td>
                        <td>35-40</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td><?=__('Баклажаны')?></td>
                        <td>40</td>
                        <td>8</td>
                        <td>50-55</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td><?=__('Руккола')?></td>
                        <td>15-20</td>
                        <td>6-7</td>
                        <td>30-35</td>
                        <td>9-10</td>
                    </tr>
                    <tr>
                        <td><?=__('Петрушка')?></td>
                        <td>40-45</td>
                        <td>8</td>
                        <td>50-55</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td><?=__('Петрушка (Брюссельская)')?></td>
                        <td>40-45</td>
                        <td>8</td>
                        <td>50-55</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td><?=__('Перец')?></td>
                        <td>40</td>
                        <td>8</td>
                        <td>50-55</td>
                        <td>14</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5 class="uk-margin-small-top">* <?=__('Цены указаны только за услуги выращивания рассады, без предоставления семян.')?></h5>
        <h5 class="uk-margin-small-top">* <?=__('Стоимость за семена оплачиваются отдельно.')?></h5>
    </div>
</div>
<?= $this->element('footer')?>
