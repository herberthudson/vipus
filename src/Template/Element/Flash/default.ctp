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
$class = 'alert alert-danger alert-dismissible';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h4>
        <i class="icon fa fa-warning"></i>
        Alert!
    </h4>
    <?= h($message) ?>
</div>
