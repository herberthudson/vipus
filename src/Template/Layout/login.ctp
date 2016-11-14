<?php
/**
 * VipUS: Admin for sale vips services
 * Copyright (c) Herbert Hudson (https://github.com/herberthudson/VipUS)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Herbert Hudson (https://github.com/herberthudson/VipUS)
 * @license       MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php // setting charset (UTF-8) - http://book.cakephp.org/3.0/en/views/helpers/html.html#creating-charset-tags ?>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php // showing meta links of pages - http://book.cakephp.org/3.0/en/views.html#extending-views ?>
    <?= $this->fetch('meta') ?>
    <?php // showing icon link - http://book.cakephp.org/3.0/en/views/helpers/html.html#creating-meta-tags ?>
    <?= $this->Html->meta('icon') ?>
    <?php // showing title - http://book.cakephp.org/3.0/en/views.html#extending-views ?>
    <title><?= $this->fetch('title') ?></title>
    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->css('bootstrap.min') ?>
    <!-- Font Awesome -->
    <?= $this->Html->css('font-awesome.min') ?>
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.min') ?>
    <!-- iCheck -->
    <?= $this->Html->css('/js/plugins/iCheck/square/blue.css') ?>
    <?php // showing css for page ?>
    <?= $this->fetch('css') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition <?= $this->fetch('bodyClass') ?>-page">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?php // TODO: add script to check if exist or load from CDN ?>
    <!-- jQuery 2.2.3 -->
    <?= $this->Html->script('plugins/jQuery/jquery-2.2.3.min') ?>

    <?php // TODO: add script to check if exist or load from CDN ?>
    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->script('bootstrap.min') ?>
    <!-- iCheck -->
    <?= $this->Html->script('plugins/iCheck/icheck.min')  ?>

    <script type="text/javascript">
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
        });
    </script>

    <?= $this->fetch('script') ?>
</body>
</html>
