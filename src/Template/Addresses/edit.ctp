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
    $this->assign('title', __('Edit Address'));
    $this->assign('description', __('Here you can change your address information'));
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
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Editing Address') ?></h3>
        </div>
        <?= $this->Form->create($address,['class' => 'form-horizontal']) ?>
        <?php $this->Form->templates($form_templates['profileForm']) ?>
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
          <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary pull-right']) ?>
        </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $address->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresses form large-9 medium-8 columns content">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= __('Edit Address') ?></legend>
        <?php
            echo $this->Form->input('profile_id', ['options' => $profiles]);
            echo $this->Form->input('street');
            echo $this->Form->input('number');
            echo $this->Form->input('complement');
            echo $this->Form->input('district');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('zipcode');
        ?>
    </fieldset>

</div>
