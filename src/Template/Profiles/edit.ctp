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
    $this->assign('title', __('Edit Profile'));
    $this->assign('description', __('Here you can change your profile information'));
?>
<div class="row">
    <div class="col-xs-12">
        <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']) ?>" class="btn btn-app">
            <i class="fa fa-vcard text-info"></i>
            <?= __('View account') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Addresses', 'action' => 'add']) ?>" class="btn btn-app">
            <i class="fa fa-map-marker text-info"></i>
            <?= __('New Address') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Phones', 'action' => 'add']) ?>" class="btn btn-app">
            <i class="fa fa-phone text-info"></i>
            <?= __('New Contact') ?>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Editing Profile') ?></h3>
            </div>
            <?= $this->Form->create($profile, ['type' => 'file', 'class' => 'form-horizontal']) ?>
            <?php $this->Form->templates($form_templates['profileForm']);?>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name"><?= __('Name: ')  ?></label>
                    <div class="col-sm-10">
                        <?= $this->Form->input('name') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="surname" class="col-sm-2 control-label"><?= __('Surname: ') ?></label>
                    <div class="col-sm-10">
                        <?= $this->Form->input('surname') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bith" class="col-sm-2 control-label"><?= __('Birthday') ?></label>
                    <div class="col-sm-10"><?php // TODO: change field to i18n ?>
                        <div class="row">
                            <?= $this->Form->input('birth', ['empty' => true, 'minYear' => date('Y') - 100, 'maxYear' => date('Y') - 10, 'class' => 'col-sm-2']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <?php // TODO: add default images options ?>
                    <label class="col-sm-2 control-label" for="photo"><?= __('Photo')?></label>
                    <div class="col-sm-10">
                        <?= $this->Form->file('photo') ?>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary pull-right']) ?>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
