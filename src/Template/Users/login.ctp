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
<?php $this->assign('bodyClass', 'login') ?>
<div class="login-box">
    <div class="login-logo">
        <?php // TODO: add named route (root) ?>
        <?php // TODO: change vipus for company config ?>
        <a href="<?= $this->Url->build('/') ?>"><b>Vip</b>US</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?= __('Sign in to start your session') ?></p>
        <?php
            // render flash auth
            echo $this->Flash->render('auth');
            // creating form
            echo $this->Form->create();
            // change template for loginForm - config/templates_form.php
            $this->Form->templates($form_templates['loginForm']);
            // create input for username without label
            echo $this->Form->input('username', ['label' => false, 'placeholder' => __('Username')]);
            // create input for password without label
            echo $this->Form->input('password', ['label' => false, 'placeholder' => __('Password')]) ?>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <?php // TODO: add Remember me option ?>
                            <input type="checkbox"> <?= __('Remember me') ?>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <?= $this->Form->button(__('Sing In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) ?>
                </div>
                <!-- /.col -->
            </div>
        <?= $this->Form->end(); ?>
        <?php // TODO: add social auth links (maybe v2?) ?>
        <!-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div> -->
        <!-- /.social-auth-links -->
        <?php // TODO: create reset password ?>
        <span class="fa fa-hand-o-right text-danger"></span> <a href="#" class="text-center"><?= __('I forgot my password') ?></a><br>
        <span class="fa fa-hand-o-right text-success"></span> <?= $this->Html->link(__('I want to register a new membership'), ['controller' => 'users', 'action' => 'add']) ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
