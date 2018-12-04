<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content=">Kumar Collection-фабричный производитель модной женской одежды оптом">
    <meta name="description" content="Мы занимаемся торговлей женской одежды больше 5ти лет.У нас отличная посадка , достойный пошив и доступные цены.Звоните:+996 771 312 662(WhatsApp)">
    <meta name="keywords" content="женская одежда от производителя,киргизия оптом платья,платья бишкек оптом в москве,платья из бишкека,женская одежда из киргизии оптом">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="женская одежда от производителя,киргизия оптом платья,платья бишкек оптом в москве,платья из бишкека,женская одежда из киргизии оптом">
    <meta property="og:description" content="Мы занимаемся торговлей женской одежды больше 5ти лет.У нас отличная посадка , достойный пошив и доступные цены.Звоните:+996 771 312 662(WhatsApp)">
    <meta property="og:site_name" content="kumarcollection.ru">
    <meta property="og:url" content="https://kumarcollection.ru/">
    <meta property="og:image" content="https://kumarcollection.ru/img/logo-kumar.png">
    <meta property="og:type" content="website">
    <title>Falcon.kg</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('uikit.css')?>
    <?= $this->Html->css('style.css')?>
    <?= $this->Html->css('jquery.fancybox.min.css')?>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Shrikhand|Montserrat+Alternates:600i|Pattaya|Audiowide|Rubik:400i|" rel="stylesheet">
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('uikit.min')?>
    <?= $this->Html->script('uikit-icons.min')?>
    <?= $this->Html->script('jquery.fancybox.min')?>
</head>
    <body style="background-color: #eeeeee" >
        <?= $this->element('top_menu')?>
        <div class="uk-panel">
			<div class="uk-position-relative" uk-slideshow="animation: scale; autoplay: true;ratio:7:2.5;autoplay-interval: 3000">
				<ul class="uk-slideshow-items">
					<li>
						 <img src="img/naom_58655c1387d00.jpg" alt="" uk-cover>
					</li>
					<li>
						<img src="img/Dried-fruit-kiwi-apricots-figs_1920x1080.jpg" alt="" uk-cover>
					</li>
					<li>
						<img src="img/maxresdefault.jpg" alt="" uk-cover>
					</li>
				</ul>
				<a href="#" class="uk-position-center-left uk-position-small uk-hidden-hover" uk-slidenav-previous uk-slideshow-item="previous"></a>
				<a href="#" class="uk-position-center-right uk-position-small uk-hidden-hover" uk-slidenav-next uk-slideshow-item="next"></a>
			</div>
		</div>
		<div class="uk-panel uk-light uk-padding-small" style="background-color: #009246">
			<span style="font-size: 22px;font-style: italic" class="uk-padding"><span class="uk-margin-right"><img class="uk-margin-small-bottom" src="img/chevron.svg" width="40" height="40" uk-svg></span><?=__('Экспорт')?></span>
		</div>
		<div class="uk-container">
			<div class="uk-grid uk-child-width-expand@m uk-margin uk-padding" uk-grid uk-scrollspy="target:div; cls:uk-animation-scale-up; delay:100;repeat: true">
				<div class="uk-text-center">
					<div class="uk-animation-toggle uk-margin-bottom">
						<div class="uk-animation-scale-up">
							<a href="bean.html" class="uk-link-reset">
								<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/t22.jpg" class="uk-border-circle" width="200" height="200">
							</a>
						</div>
					</div>
					<a href="bean.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Бобовые культуры')?></a>
					<hr>
					<p class="uk-text-meta padding-prod"><?=__('Выращенная на полях Талассой области фасоль в Кыргызстане стала гордостью нашей компании.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="dried_fruits.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 0px solid #fff;" src="img/t12.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="dried_fruits.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Сухофрукты')?></a>
					<hr>
					<p class="uk-text-meta padding-prod"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="nut.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/OREH-200x200.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Ореховые культуры')?></a>
					<hr>
					<p class="uk-text-meta padding-prod"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="medherbs.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/204-200x200.png" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Лекарственные растения,плоды и ягоды')?></a>
					<hr>
					<p class="uk-text-meta padding-prod"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="greens.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/ovowi.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Свежие овощи и фрукты')?></a>
					<hr>
					<p class="uk-text-meta padding-prod"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
			</div>
		</div>
		<div class="uk-panel uk-light uk-padding-small" style="background-color: #009246">
			<span style="font-size: 22px;font-style: italic" class="uk-padding"><span class="uk-margin-right"><img class="uk-margin-small-bottom" src="img/chevron-b.svg" width="40" height="40" uk-svg></span><?=__('Импорт')?></span>
		</div>
		<div class="uk-container">
			<div class="uk-grid uk-child-width-expand@m uk-margin uk-padding" uk-grid uk-scrollspy="target:div; cls:uk-animation-scale-up; delay:100;repeat: true">
				<div class="uk-text-center">
					<a href="desiccator.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/oborudov-300x273-200x200.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Сушильные шкафы')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Выращенная на полях Талассой области фасоль в Кыргызстане стала гордостью нашей компании.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="toys.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/toy.jpeg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="towel.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Мягкие игрушки')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="agroequipment.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/137880148584-300x162.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="agroequipment.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Сельхозтехника и сельскохозяйственное оборудование')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="shoes.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/620000261-200x200.jpeg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Спецодежда')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
			</div>
		</div>
		<div class="uk-panel uk-light uk-padding-small" style="background-color: #009246">
			<span style="font-size: 1.8vw;font-style: italic" class="uk-padding"><span class="uk-margin-right"><img class="uk-margin-small-bottom" src="img/chevron.svg" width="40" height="40" uk-svg></span><?=__('Собственное производство и наши услуги')?></span>
		</div>
		<div class="uk-container">
			<div class="uk-grid uk-child-width-expand@m uk-margin uk-padding" uk-grid uk-scrollspy="target:div; cls:uk-animation-scale-up; delay:100;repeat: true">
				<div class="uk-text-center">
					<a href="boiler.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/735_medium.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="boiler.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Котлы «Termolux»')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Выращенная на полях Талассой области фасоль в Кыргызстане стала гордостью нашей компании.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="juicer.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/ScrewJuicingMachineScrewJuiceExtractor_d2d4a348-23a1-48b9-871a-e7f304e7a76e.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="towel.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Соковыжималки')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="agrobuild.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/122.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="agroequipment.html" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Услуги агростроительства')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
				<div class="uk-text-center">
					<a href="seedlings.html" class="uk-link-reset">
						<img style="box-shadow: 5px 5px 10px;border: 7px solid #fff;" src="img/Sadike-200x200.jpg" class="uk-border-circle uk-margin-bottom" width="200" height="200">
					</a>
					<a href="" class="uk-link-reset uk-text-lead uk-margin-bottom-remove uk-margin-top"><?=__('Рассады')?></a>
					<hr>
					<p class="uk-text-meta"><?=__('Мы предлагаем купить экологически чистые сухофрукты в Кыргызстане по отличной стоимости.')?></p>
				</div>
			</div>
		</div>
		<div class="uk-panel" style="background-image: url(img/footer-back.png)">
			<div class="uk-container uk-light uk-margin-top">
				<div class="uk-grid uk-child-width-expand@s uk-padding-small uk-text-center">
					<div></div>
					<div><img src="img/apk.jpg" width="70"></div>
					<div><img src="img/mieconomkr-logo1.png" width="80"></div>
					<div><img src="img/jia.png" width="80" class="uk-border-circle"></div>
					<div><img src="img/312.jpg" width="70" class="uk-border-rounded"></div>
					<div><img src="img/612.jpg" width="70" class="uk-border-rounded"></div>
					<div></div>
				</div>
			</div>
		</div>
        <?= $this->element('footer')?>
    </body>
</html>
