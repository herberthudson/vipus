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
<?php $this->assign('bodyClass', 'register') ?>
<div class="register-box">
    <div class="register-logo">
        <?php // TODO: add named route (root) ?>
        <?php // TODO: change vipus for company config ?>
        <a href="<?= $this->Url->build('/') ?>"><b>Vip</b>US</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg"><?= __('Register a new membership') ?></p>
        <?php
            // render flash auth
            echo $this->Flash->render('Auth');
            // FIXME: fix erros not showing on separated input
            // creating form
            echo $this->Form->create();
            // change template for loginForm - config/templates_form.php
            $this->Form->templates($form_templates['loginForm']);
            // create input for profile name without label
            echo $this->Form->input('profile.name', ['label' => false, 'placeholder' => __('Name')]);
            // create input for profile surname without label
            echo $this->Form->input('profile.surname', ['label' => false, 'placeholder' => __('Last name')]);
            // create input for username without label
            echo $this->Form->input('username', ['label' => false, 'placeholder' => __('Username')]);
            // create input for e-mail without label
            echo $this->Form->input('email', ['label' => false, 'placeholder' => __('E-mail')]);
            // create input for password without label
            echo $this->Form->input('password', ['label' => false, 'placeholder' => __('Password')]);
            // create input for repassword without label
            echo $this->Form->input('repassword', ['label' => false, 'type' => 'password', 'placeholder' => __('Retype password')]);

            ?>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <?php // TODO: add terms page, link and internationalization ?>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <?= $this->Form->button(__('Register'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat']) ?>
                </div>
                <!-- /.col -->
            </div>
        <?= $this->Form->end(); ?>
        <?php // TODO: add social auth links (maybe v2?) ?>
        <!-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div> -->

        <span class="fa fa-hand-o-right text-success"></span> <?= $this->Html->link(__('I already have a membership'), ['controller' => 'users', 'action' => 'login']) ?>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
