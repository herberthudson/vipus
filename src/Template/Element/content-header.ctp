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
<section class="content-header">
  <h1>
    <?php echo $title = isset($title) ? $title : ''; ?>
    <small><?php echo $description = isset($description) ? $description : ''; ?></small>
  </h1>
  <?php // TODO: improve breadcrumb ?>
  <ol class="breadcrumb">
    <li><a href="<?= $this->Url->build('/') ?>"><i class="fa fa-dashboard"></i><?= __('Home') ?></a></li>
    <li><?= $this->Html->link($this->request->param('controller'), ['controller' => $this->request->param('controller')]) ?></li>
    <li class="active"><?= $this->request->param('action') ?></li>
  </ol>
</section>
