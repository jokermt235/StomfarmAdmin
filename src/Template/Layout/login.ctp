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
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway|Shrikhand|Montserrat+Alternates:600i|Pattaya|Audiowide|Rubik:400i|" rel="stylesheet">
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('uikit.min')?>
    <?= $this->Html->script('uikit-icons.min')?>
    <script>
        var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    </script>
</head>
    <body>
    <?= $this->fetch('content')?>
    </body>
</html>
