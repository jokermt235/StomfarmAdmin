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
    <?= $this->Html->css('uikit.css')?>
    <?= $this->Html->css('style.css')?>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Shrikhand|Montserrat+Alternates:600i|Pattaya|Audiowide|Rubik:400i|" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <title>Falcon.kg</title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
</head>
    <body>
    </body>
</html>
