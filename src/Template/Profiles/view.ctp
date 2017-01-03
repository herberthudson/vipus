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
$this->assign('title', __('Profile'));
$this->assign('description', __('Here you can see your profile information'));
?>
<?php // TODO: move to helper ?>
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
        <a href="<?= $this->Url->build(['controller' => 'Phones', 'action' => 'view']) ?>" class="btn btn-app">
            <i class="fa fa-phone text-info"></i>
            <?= __('View Contacts') ?>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <?php // TODO: make a helper and add image from table instead session ?>
                <img src="<?= $this->Auth->user('photo') ?>" alt="User profile photo" class="profile-user-img img-responsive img-circle" />
                <h3 class="profile-username text-center"><?= $profile->has('user') ? $profile->user->username : '' ?></h3>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b><?= __('Name:') ?></b>
                        <span class="pull-right"><?= h($profile->name) ?></span>
                    </li>
                    <li class="list-group-item">
                        <b><?= __('Surname:') ?></b>
                        <span class="pull-right"><?= h($profile->surname) ?></span>
                    </li>
                    <li class="list-group-item">
                        <b><?= __('Birth:') ?></b>
                        <span class="pull-right"><?= h($profile->birth) ?></span>
                    </li>
                    <li class="list-group-item">
                        <b><?= __('Last change:') ?></b>
                        <?php // TODO: show i18n date format ?>
                        <span class="pull-right"><?= $profile->modified ?></span>
                    </li>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'profiles', 'action' => 'edit'], ['class' => 'btn btn-primary btn-block']) ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-map-marker"></i>
                <h3 class="box-title"><?= __('Addresses')?></h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <?php if (!empty($profile->addresses)): ?>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>
                                    <?php // TODO: add field title on table addresses ?>
                                    <?= __('ID') ?>
                                </th>
                                <th>
                                    <?= __('Name') ?>
                                </th>
                                <th>
                                    <?= __('Street') ?>
                                </th>
                                <th>
                                    <?= __('Number') ?>
                                </th>
                                <th>
                                    <?= __('Complement') ?>
                                </th>
                                <th>
                                    <?= __('District') ?>
                                </th>
                                <th>
                                    <?= __('City') ?>
                                </th>
                                <th>
                                    <?= __('State') ?>
                                </th>
                                <th>
                                    <?= __('Country') ?>
                                </th>
                                <th>
                                    <?= __('Zipcode') ?>
                                </th>
                                <th>
                                    <?= __('Created') ?>
                                </th>
                            </tr>
                            <?php foreach ($profile->addresses as $address): ?>
                                <tr>
                                    <td><?= $this->Number->format($address->id) ?></td>
                                    <td><?= h($address->name) ?></td>
                                    <td><?= h($address->street) ?></td>
                                    <td><?= $this->Number->format($address->number) ?></td>
                                    <td><?= h($address->complement) ?></td>
                                    <td><?= h($address->district) ?></td>
                                    <td><?= h($address->city) ?></td>
                                    <td><?= h($address->state) ?></td>
                                    <td><?= h($address->country) ?></td>
                                    <td><?= $this->Number->format($address->zipcode) ?></td>
                                    <td><?= h($address->created) ?></td> <?php // TODO: format date ?>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted text-center"><?= __('No addresses') ?></p>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <?= $this->Html->link(__('Add Address'), ['controller' => 'addresses', 'action' => 'add'], ['class' => 'btn btn-primary pull-right'] ) ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-phone"></i>
                <h3 class="box-title"><?= __('Contacts') ?></h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <?php if (!empty($profile->phones)): ?>
                    <table class="table table-hover">
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Created') ?></th>
                        </tr>
                        <?php foreach ($profile->phones as $phones): ?>
                        <tr>
                            <td><?= h($phones->id) ?></td>
                            <td><?= h($phones->title) ?></td>
                            <td><?= h($phones->number) ?></td>
                            <td><?= h($phones->created) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <p class="text-muted text-center">
                            <?= __('No Contacts') ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="box-footer">
                <?= $this->Html->link(__('New Contact'), ['controller' => 'phones', 'action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>
            </div>
        </div>
    </div>
</div>
