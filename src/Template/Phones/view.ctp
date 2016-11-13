<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="phones view large-9 medium-8 columns content">
    <h3><?= h($phone->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $phone->has('profile') ? $this->Html->link($phone->profile->name, ['controller' => 'Profiles', 'action' => 'view', $phone->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($phone->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($phone->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($phone->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($phone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($phone->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($phone->modified) ?></td>
        </tr>
    </table>
</div>
