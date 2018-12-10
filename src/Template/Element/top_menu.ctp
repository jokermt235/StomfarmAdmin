<div class="uk-panel uk-padding-small uk-light" style="background-color: #009246">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-1-2@m uk-child-width-1-1@s">
            <div class="uk-text-left" style="color: white">
                <span uk-icon="icon: receiver" class="uk-margin-small-right"></span>+996 557 177 175					
                <span><span uk-icon="icon: mail" class="uk-margin-small-right uk-margin-left"></span>falcon.kg@mail.ru</span>					
            </div>
            <div class="uk-text-right uk-visible@m">
                <a href="" uk-icon="facebook"></a>
                <a href="" uk-icon="instagram" class="uk-margin-small-left"></a>
                <a href="" uk-icon="linkedin" class="uk-margin-small-left"></a>
            </div>
        </div>
    </div>
</div>
<div class="uk-panel">
    <nav class="uk-container" uk-navbar>
        <div class="uk-navbar-left">
            <a href="<?= $this->Url->build("/")?>" class="uk-navbar-item uk-logo">
                <?= $this->Html->image('falcon-logo_green.png', 
                    array('class'=>'uk-border-rounded', 'width' => 150, 'height' => 100,'alt'=>'falcon.kg')
                )?>
            </a>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li><a href="<?= $this->Url->build("/")?>"><?=__('Главная')?></a></li>
                <li>
                    <a href="<?= $this->Url->build(['controller'=>'About', 'action'=>'index'])?>"><?=__('О нас')?></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="<?= $this->Url->build(['controller'=>'About','action'=>'index'])?>"><?=__('О компании')?></a></li>
                            <li><a href="<?= $this->Url->build(['controller'=>'About','action'=>'partners'])?>"><?=__('Партнеры')?></a></li>
                            <li><a href="<?= $this->Url->build(['controller'=>'About','action'=>'reccomendation'])?>"><?=__('Рекомендации')?></a></li>
                            <li><a href="<?= $this->Url->build(['controller'=>'About','action'=>'invest'])?>"><?=__('Инвестиционные предложения')?></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><?=__('Каталог')?></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav uk-nav-parent-icon uk-nav-default" uk-nav>
                            <li class="uk-parent">
                                <a href="#"><?=__('Экспорт')?></a>
                                <ul class="uk-nav-sub">
                                    <li>
                                        <a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'beans'])?>">
                                            <?=__('Бобовые культуры')?>
                                        </a>
                                    </li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'dryfruits'])?>"><?=__('Сухофрукты')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'nuts'])?>"><?=__('Ореховые культуры')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'medherbs'])?>"><?=__('Лекарственные растания,плоды и ягоды')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'greens'])?>"><?=__('Свежие овощи и фрукты')?></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#"><?=__('Импорт')?></a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'desiccator'])?>"><?=__('Сушильные шкафы')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'hugs'])?>"><?=__('Мягкие игрушки')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agroequipment'])?>"><?=__('Сельхоз техника')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agroequipment'])?>"><?=__('Спецодежда')?></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#"><?=__('Собст. производство и наши услуги')?></a>
                                <ul class="uk-nav-sub">
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'boiler'])?>"><?=__('Котлы "Termolux"')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'juicer'])?>"><?=__('Соковыжималки')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agrobuild'])?>"><?=__('Услуги агростроительства')?></a></li>
                                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'seedlings'])?>"><?=__('Рассады')?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?= $this->Url->build(['controller'=>'catalog','action'=>'commercial'])?>"><?=__('Коммерческие предложения')?></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?= $this->Url->build(['controller'=>'news','action'=>'index'])?>"><?=__('Новости')?></a></li>
                <li><a href="<?= $this->Url->build(['controller'=>'About','action'=>'contact'])?>"><?=__('Контакты')?></a></li>
            </ul>
            <ul class="uk-navbar-nav uk-margin-left uk-visible@m">
                <li>
                    <div class="uk-margin-right">
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon:search"></span>
                            <input type="text" class="uk-input" placeholder="поиск">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <a href="#offcanvas-nav-primary" class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon" uk-toggle="" uk-navbar-toggle-icon></a>
    </nav>
</div>
<!--off canvas menu -->
<div id="offcanvas-nav-primary" uk-offcanvas="overlay:true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="\"><?=__('Главная')?></a></li>
            <li class="uk-parent uk-active">
                <a href="<?= $this->Url->build(['controller'=>'about','action'=>'index'])?>"><?=__('О нас')?></a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= $this->Url->build(['controller'=>'about','action'=>'partners'])?>"><?=__('Партнеры')?></a>
                        <a href="<?= $this->Url->build(['controller'=>'about', 'action'=>'reccomendation'])?>"><?=__('Рекомендации')?></a>
                        <a href="<?= $this->Url->build(['controller'=>'about','action' => 'invest'])?>"><?=__('Инвестиционные предложения')?></a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent uk-active">
                <a href="products.html"><?=__('Каталог')?></a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'beans'])?>">
                            <?=__('Бобовые культуры')?>
                        </a>
                    </li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'dryfruits'])?>"><?=__('Сухофрукты')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'nuts'])?>"><?=__('Ореховые культуры')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'medherbs'])?>"><?=__('Лекарственные растания,плоды и ягоды')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'greens'])?>"><?=__('Свежие овощи и фрукты')?></a></li>
                </ul>
                <hr>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'desiccator'])?>"><?=__('Оборудование для производства сухофруктов')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'hugs'])?>"><?=__('Мягкие игрушки')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agroequipment'])?>"><?=__('Сельхоз техника')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agroequipment'])?>"><?=__('Спецодежда')?></a></li>
                </ul>
                <hr>
                <ul class="uk-nav-sub">
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'boiler'])?>"><?=__('Котлы "Termolux"')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'juicer'])?>"><?=__('Соковыжималки')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'agrobuild'])?>"><?=__('Услуги агростроительства')?></a></li>
                    <li><a href="<?= $this->Url->build(['controller'=>'Catalog','action'=>'seedlings'])?>"><?=__('Рассады')?></a></li>
</ul>
            </li>
            <li class="uk-active"><a href="<?= $this->Url->build(['controller'=>'news','action'=>'index'])?>"><?=__('Новости')?></a></li>
            <li class="uk-active"><a href="<?= $this->Url->build(['controller'=>'about','action'=>'contact'])?>"><?=__('Контакты')?></a></li>
        </ul>
    </div>
</div>
<!--off canvas menu end -->
