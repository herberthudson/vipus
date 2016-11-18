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
<?php
    $this->assign('title', __('Account'));
    $this->assign('description', __('Here you can see your account information.'))
?>
<div class="row">
    <div class="col-lg-12">
        <a href="<?= $this->Url->build(['controller' => 'profiles', 'action' => 'view']) ?>" class="btn btn-app">
            <i class="fa fa-id-card-o"></i>
            <?= __('Profile') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'orders', 'action' => 'index']) ?>" class="btn btn-app">
            <i class="fa fa-shopping-bag"></i>
            <?= __('Orders') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'support']) ?>" class="btn btn-app">
            <i class="fa fa-life-ring"></i>
            <?= __('Support') ?>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="<?= $this->Auth->user('photo') ?>" alt="User photo">
                </div>

                <h3 class="widget-user-username"><?= $this->Auth->user('full_name') ?></h3>

                <h5 class="widget-user-desc"><?= $this->Auth->user('username') ?></h5>

            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li>
                        <a href="#">
                            <b><?= __("Member since") ?></b>
                            <?php // TODO: format date D of Month, Y ?>
                            <span class="pull-right"><?= $this->Auth->user('created') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <b><?= __("Last change") ?></b>
                            <?php // TODO: format date D of Month, Y ?>
                            <span class="pull-right"><?= $this->Auth->user('modified') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <?php // TODO: add last login ?>
                            <b><?= __("Last login") ?></b>
                            <?php // TODO: format date D of Month, Y ?>
                            <span class="pull-right badge bg-yellow">comming...</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= __('Profile') ?></a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true"><?= __('Password') ?></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <h3><i class="fa fa-id-card-o"></i> <?= __('Profile Information') ?></h3>
                    <hr>
                    <dl class="dl-horizontal">
                        <?php // username ?>
                        <dt><?= __('Username') ?>:</dt>
                        <dd><?= $user['username'] ?></dd>
                        <?php // email ?>
                        <dt><?= __('Email') ?>:</dt>
                        <dd><?= $user['email'] ?></dd>
                        <?php // profile name ?>
                        <dt><?= __('Name') ?>:</dt>
                        <dd><?= $user['profile']['name'] ?></dd>
                        <?php // profile surname ?>
                        <dt><?= __('Surname') ?>:</dt>
                        <dd><?= $user['profile']['surname'] ?></dd>
                        <?php // profile birthday ?>
                        <dt><?= __('Birthday') ?>:</dt>
                        <?php // TODO: show in i8n format ?>
                        <dd><?= $user['profile']['birth'] ?></dd>
                    </dl>
                    <hr>
                    <?= $this->Html->link(__('Edit Profile'), ['controller' => 'profiles', 'action' => 'edit'], ['class' => 'btn btn-flat btn-warning']) ?>
                </div>
                <div class="tab-pane" id="tab_2">
                    <?php // TODO: add change password form and action ?>
                    <p class="text-info">
                        comming...
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="text-danger">
                    <i class="fa fa-user-times"></i> Delete Account
                </h3>
            </div>
            <div class="box-body">
                <?php // TODO: add more information about risk to delete account ?>
                Are you sure about delete your Account?
            </div>
            <div class="box-footer">
                <?= $this->Form->postLink(__('Delete Account'), [
                    'action' => 'delete',
                    $user['id']
                ],
                ['confirm' => 'Are you sure?',
                'class' => 'btn btn-danger btn-flat']) ?>
            </div>
        </div>
    </div>
</div>
