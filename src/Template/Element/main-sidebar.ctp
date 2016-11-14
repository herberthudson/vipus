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
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php // TODO: add profile photo ?>
                <img src="<?= $this->Url->image('avatar.png') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <?php // TODO: add profile name ?>
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?= __('Online') ?></a>
            </div>
        </div>
        <?php // TODO: add search ?>
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"><?= __('MAIN NAVIGATION') ?></li>
            <li class="<?= $this->Menu->checkController(['Pages']) ?>">
                <a href="<?= $this->Url->build('/') ?>"><?php // TODO: add url named route (root) ?>
                    <i class="fa fa-home"></i> <span><?= __('Home') ?></span>
                </a>
            </li>
            <li class="<?= $this->Menu->checkController(['Users']) ?>">
                <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']) ?>">
                    <i class="fa fa-user"></i> <span><?= __('Account') ?></span>
                </a>
            </li>
            <li class="<?= $this->Menu->checkController(['Services']) ?>">
                <a href="<?= $this->Url->build(['controller' => 'services', 'action' => 'index'])  ?>">
                    <i class="fa fa-server"></i> <span><?= __('Services') ?></span>
                </a>
            </li>
            <li class="<?= $this->Menu->checkController(['Products']) ?>">
                <a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'index']) ?>">
                    <i class="fa fa-shopping-cart"></i> <span><?= __('Products') ?></span>
                </a>
            </li>
            <li class="<?= $this->Menu->checkAction('Pages', 'support') ?>">
                <a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'support']) ?>">
                    <i class="fa fa-life-ring"></i> <span><?= __('Support') ?></span>
                </a>
            </li>
            <?php // TODO: add news links ?>
            <!-- <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
