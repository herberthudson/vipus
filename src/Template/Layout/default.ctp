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
    <?php // adding fallback to load all css and js by local and CDN - https://github.com/dolox/fallback/tree/v2 ?>
    <script src="<?= $this->Url->script('fallback.min') ?>" type="text/javascript"></script>
    <?php // showing css for page ?>
    <?= $this->fetch('css') ?>
    <?php // FIXME: load css before HTML5 Shim ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body  class="hold-transition skin-blue sidebar-mini">
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
                                        Alexander Pierce - Web Developer
                                        <?php // TODO: add user created field formated ?>
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?php // TODO: link for profile ?>
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <?php // TODO: link logout ?>
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
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


    <?php // fallback config for Css ?>
    <script type="text/javascript">
        fallback.config({
            "libs": {
                "css$bootstrap": {
                    "exports": ".col-xs-12",
                    "urls": [
                        "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
                        // FIXME: fix load all files instead one
                        // "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css",
                        // "//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css",
                        // "//cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css",
                        // "<?= $this->Url->css('bootstrap.min') ?>"
                    ]
                },
                'css$fontawesome': {
                    "exports": ".fa",
                    "urls": [
                            "//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css",
                            // FIXME: fix load all files instead one
                            // "//cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css",
                            // "<?= $this->Url->css('font-awesome.min') ?>"
                    ]
                },
                'css$ionicons': {
                    "exports": ".ion",
                    "urls": [
                            "//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css",
                            // FIXME: fix load all files instead one
                            // "//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
                            // "//cdn.jsdelivr.net/ionicons/2.0.1/css/ionicons.min.css",
                            // "<?= $this->Url->css('ionicons.min') ?>"
                    ]
                },
                'css$adminlte': {
                    "exports": ".wrapper",
                    "urls": [
                            "<?= $this->Url->css('AdminLTE.min') ?>"
                    ]
                },
                'css$skins': {
                    "exports": "",
                    "urls": [
                            "<?= $this->Url->css('skins/_all-skins.min') ?>"
                    ]
                },
                "jQuery": {
                    "exports": 'jQuery',
                    "urls": [
                        // FIXME: fix load all files instead one
                        // "//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js",
                        // "//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.3.min.js",
                        "<?= $this->Url->script('plugins/jQuery/jquery-2.2.3.min') ?>"
                    ]
                },
                "bootstrap": {
                    "exports": 'jQuery.fn.modal',
                    "deps": "jQuery",
                    "urls": [
                        // FIXME: fix load all files instead one
                        // "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
                        "<?= $this->Url->script('bootstrap.min') ?>"
                    ]
                },
                "slimscroll": {
                    "exports": 'jQuery.slimScroll',
                    "deps": "jQuery",
                    "urls": [
                        // FIXME: fix load all files instead one
                        // "//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js",
                        "<?= $this->Url->script('plugins/slimScroll/jquery.slimscroll.min') ?>"
                    ]
                },
                "fastclick": {
                    "exports": 'FastClick',
                    "urls": [
                        "<?= $this->Url->script('plugins/fastclick/fastclick.js') ?>"
                    ]
                },
                "adminlte": {
                    "exports": 'AdminLTE',
                    "deps": "bootstrap",
                    "urls": [
                        "<?= $this->Url->script('app') ?>"
                    ]
                }
            }
        });

        fallback.require(function (css$bootstrap, css$fontawesome, css$ionicons, css$adminlte, css$skins) {

        });

        fallback.require(function (jQuery, bootstrap, slimscroll, fastclick, adminlte) {

        });

    </script>
    <? // loading scripts for page ?>
    <?= $this->fetch('script') ?>
</body>
</html>
