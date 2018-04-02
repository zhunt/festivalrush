<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Festival[]|\Cake\Collection\CollectionInterface $festivals
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Festival'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="festivals index large-9 medium-8 columns content">
    <h3><?= __('Festivals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('festival_start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('festival_end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('festival_month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('festival_logo_image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($festivals as $festival): ?>
            <tr>
                <td><?= $this->Number->format($festival->id) ?></td>
                <td><?= h($festival->name) ?></td>
                <td><?= $this->Number->format($festival->festival_start_date) ?></td>
                <td><?= $this->Number->format($festival->festival_end_date) ?></td>
                <td><?= h($festival->festival_month) ?></td>
                <td><?= h($festival->festival_logo_image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $festival->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $festival->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $festival->id], ['confirm' => __('Are you sure you want to delete # {0}?', $festival->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
