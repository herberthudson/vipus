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
$this->assign('title', __('Addresses'));
$this->assign('description', __('Here you can see yours Addresses'));
?>
<div class="row">
    <div class="col-xs-12">
        <a href="<?= $this->Url->build(['controller' => 'Profiles', 'action' => 'view']) ?>" class="btn btn-app">
            <i class="fa fa-vcard text-info"></i>
            <?= __('View Profile') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Phones', 'action' => 'view']) ?>" class="btn btn-app">
            <i class="fa fa-phone text-info"></i>
            <?= __('View Contacts') ?>
        </a>
        <a href="<?= $this->Url->build(['controller' => 'Addresses', 'action' => 'add']) ?>" class="btn btn-app">
            <i class="fa fa-phone text-info"></i>
            <?= __('Add Address') ?>
        </a>
    </div>
</div>
<?php //TODO: make a better table ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-map-marker"></i>
                <h3 class="box-title"><?= __('Addresses') ?></h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <?php if (!empty($addresses)): ?>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('complement') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('district') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('zipcode') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        <?php foreach ($addresses as $address): ?>
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
                                <td><?= h($address->zipcode) ?></td>
                                <td><?= h($address->created) ?></td>
                                <td><?= h($address->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $address->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm pull-right no-margin">
                    <?= $this->Paginator->prev('« ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' »') ?>
                </ul>
                <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
     {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
            </div>
        </div>
    </div>
</div>
