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
    $this->assign('title', __('Add Address'));
    $this->assign('description', __('Here you can add a new address'));
?>
<div class="row">
    <div class="col-xs-12">
        <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']) ?>" class="btn btn-app">
            <i class="fa fa-vcard text-info"></i>
            <?= __('View account') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Addresses', 'action' => 'index']) ?>" class="btn btn-app">
            <i class="fa fa-map-marker text-info"></i>
            <?= __('View Addresses') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Phones', 'action' => 'add']) ?>" class="btn btn-app">
            <i class="fa fa-phone text-info"></i>
            <?= __('New Contact') ?>
        </a>
    </div>
</div>
<?php // TODO: update form style ?>
<div class="row">
    <div class="col-xs-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Add Address') ?></h3>
            </div>
            <?= $this->Form->create($address, ['class' => 'form-horizontal']); ?>
            <?php  $this->Form->templates($form_templates['profileForm']); ?>
            <div class="box-body">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label"><?= __('Name') ?></label>
                <div class="col-sm-4">
                  <?= $this->Form->input('name', ['placeholder' => __('Ex.: Residential')]) ?>
                </div>
              </div>
              <div class="form-group">
                <label for="street" class="col-sm-2 control-label"><?= __('Street') ?></label>
                <div class="col-sm-6">
                  <?= $this->Form->input('street') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="number" class="col-sm-2 control-label"><?= __('Number') ?></label>
                <div class="col-sm-2">
                  <?= $this->Form->input('number') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="complement" class="col-sm-2 control-label"><?= __('Complement') ?></label>
                <div class="col-sm-4">
                  <?= $this->Form->input('complement') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="district" class="col-sm-2 control-label"><?= __('District') ?></label>
                <div class="col-sm-6">
                  <?= $this->Form->input('district') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="city" class="col-sm-2 control-label"><?= __('City') ?></label>
                <div class="col-sm-6">
                  <?= $this->Form->input('city') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label"><?= __('State') ?></label>
                <div class="col-sm-4">
                  <?= $this->Form->input('state') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-sm-2 control-label"><?= __('Country') ?></label>
                <div class="col-sm-4">
                  <?= $this->Form->input('country') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="zipcode" class="col-sm-2 control-label"><?= __('Zipcode') ?></label>
                <div class="col-sm-2">
                  <?= $this->Form->input('zipcode') ?>
                </div>
              </div>
            </div>
            <div class="box-footer">
                <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
