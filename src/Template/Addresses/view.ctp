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
<?php // TODO: make better layout ?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-map-marker"></i>
        <h3 class="box-title"><?= __('Address') ?></h3>
      </div>
      <div class="box-body">
        <h2><?= h($address->name) ?></h2>
        <hr>
        <dl class="dl-horizontal">
          <dt><?= __('Street') ?></dt>
          <dd><?= h($address->street) ?></dd>

          <dt><?= __('Number') ?></dt>
          <dd><?= $this->Number->format($address->number) ?></dd>

          <dt><?= __('Complement') ?></dt>
          <dd><?= h($address->complement) ?></dd>

          <dt><?= __('District') ?></dt>
          <dd><?= h($address->district) ?></dd>

          <dt><?= __('City') ?></dt>
          <dd><?= h($address->city) ?></dd>

          <dt><?= __('State') ?></dt>
          <dd><?= h($address->state) ?></dd>

          <dt><?= __('Country') ?></dt>
          <dd><?= h($address->country) ?></dd>

          <dt><?= __('Zipcode') ?></dt>
          <dd><?= $this->Number->format($address->zipcode) ?></dd> <?php // TODO: add format to zipcode locale ?>

          <dt><?= __('Created') ?></dt>
          <dd><?= h($address->created) ?></dd> <?php // TODO: format date ?>
        </dl>
      </div>
      <div class="box-footer">
        <?= $this->Html->link('Edit', ['controller' => 'addresses', 'action' => 'edit', $address->id], ['class' => 'btn btn-primary pull-right']) ?>
      </div>
    </div>
  </div>
</div>
