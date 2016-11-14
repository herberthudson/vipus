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
    <?php // TODO: check if css link is on if not show local file ?>
    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->css('bootstrap.min') ?>
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <?= $this->Html->css('font-awesome.min')  ?>
    <?php // TODO: add ionicons only when its used ?>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.min') ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <?= $this->html->css('skins/_all-skins.min') ?>

    <?php // showing css for page ?>
    <?= $this->fetch('css') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body  class="hold-transition skin-blue sidebar-mini"> <?php // TODO: add option to change skin ?>
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo --> <?php // TODO: add named route (root) ?>
            <a href="<?= $this->Url->build('/') ?>" class="logo">
                <?php // TODO: create a config or table for company(logo and name) ?>
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>V</b>US</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Vip</b>US</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php // TODO: add profile photo ?>
                                <img src="<?= $this->Url->image('avatar.png') ?>" class="user-image" alt="User Image">
                                <?php // TODO: add profile name ?>
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <?php // TODO: add profile photo ?>
                                    <img src="<?= $this->Url->image('avatar.png') ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php // TODO: add profile name ?>
                                        <?= $this->request->session()->read('Auth.User.username') ?>
                                        <?php // TODO: format field created ?>
                                        <small><?= __('Member since') ?> <?= $this->request->session()->read('Auth.User.created') ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <?= $this->Html->link(__('Account'), ['controller' => 'users', 'action' => 'index']) ?>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <?= $this->Html->link(__('Orders'), ['controller' => 'orders', 'action' => 'index']) ?>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <?php // TODO: add support page ?>
                                            <?= $this->Html->link(__('Support'), ['controller' => 'pages', 'action' => 'support']) ?>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?= $this->Html->link(__('Profile'), ['controller' => 'profiles', 'action' => 'index'], ['class' => 'btn btn-default btn-flat']) ?>
                                    </div>
                                    <div class="pull-right">
                                        <?= $this->Html->link(__('Sign out'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat']) ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->
        <?php // main-sidebar element -  ?>
        <?= $this->element('main-sidebar'); ?>
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php // content header ?>
            <?= $this->element('content-header'); ?>
            <?php // TODO: move to a better place ?>
            <?= $this->Flash->render() ?>
            <!-- Main content -->
            <section class="content">
                <?= $this->fetch('content') ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Template <b>AdminLTE</b> by <a href="http://almsaeedstudio.com">Abdullah Almsaeed</a>.
            </div>
            <strong>
                Copyright &copy; <?php echo $x = (date('Y') == 2016) ? date('Y') : ('2016-' . date('Y')) ?> <a href="https://github.com/herberthudson/VipUS">Herbert Hudson</a>.
            </strong><?= __('All rights reserved.') ?>
        </footer>

    </div>
    <!-- ./wrapper -->


    <?php // TODO: add script to check if exist or load from CDN ?>
    <!-- jQuery 2.2.3 -->
    <?= $this->Html->script('plugins/jQuery/jquery-2.2.3.min') ?>

    <?php // TODO: add script to check if exist or load from CDN ?>
    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->script('bootstrap.min') ?>

    <?php // TODO: add script to check if exist or load from CDN ?>
    <!-- FastClick -->
    <?= $this->Html->script('plugins/fastclick/fastclick.min') ?>

    <!-- AdminLTE App -->
    <?= $this->Html->script('app') ?>

    <? // loading scripts for page ?>
    <?= $this->fetch('script') ?>
</body>
</html>
