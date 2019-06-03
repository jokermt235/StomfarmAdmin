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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <title></title>
    <!--<?= $this->Html->meta('icon') ?>-->
    <?= $this->Html->css('uikit.css')?>
	<?= $this->Html->css('style')?>
    <!--<link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Shrikhand|Montserrat+Alternates:600i|Pattaya|Audiowide|Rubik:400i|" rel="stylesheet">-->
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('uikit.min')?>
    <?= $this->Html->script('uikit-icons.min')?>
    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script> 
    <script>
        const csrfToken = token = <?= json_encode($this->request->getParam('_csrfToken')) ?>;   
    </script>
    <?= $this->Html->script('components/config.js')?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <?= $this->html->script('components/instance.js')?>
</head>
    <body>
        <?= $this->element('admin_menu')?>
        <?= $this->element('left_menu')?>
        <?php $controller = $this->request->getParam('controller')?>
        <?php $action = $this->request->getParam('action')?>
        <div class="uk-container uk-container-small uk-margin-top tm-main">
            <ul class="uk-breadcrumb">
                <li><a href="<?=$this->Url->build(['controller'=>$controller, 'action'=>'index'])?>"><?=$controller?></a></li>
                <li><a href="<?=$this->Url->build(['controller'=>$controller, 'action'=>'index'])?>"><?=$action?></a></li>
            </ul>
            <hr>
            <?= $this->fetch('content')?>
        </div>
    </body>
</html>
