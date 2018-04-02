<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Venues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Festivals'), ['controller' => 'Festivals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Festival'), ['controller' => 'Festivals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="venues view large-9 medium-8 columns content">
    <h3><?= h($venue->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($venue->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($venue->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $venue->has('city') ? $this->Html->link($venue->city->name, ['controller' => 'Cities', 'action' => 'view', $venue->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venue->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Festivals') ?></h4>
        <?php if (!empty($venue->festivals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Festival Description') ?></th>
                <th scope="col"><?= __('Festival Start Date') ?></th>
                <th scope="col"><?= __('Festival End Date') ?></th>
                <th scope="col"><?= __('Festival Month') ?></th>
                <th scope="col"><?= __('Festival Logo Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->festivals as $festivals): ?>
            <tr>
                <td><?= h($festivals->id) ?></td>
                <td><?= h($festivals->name) ?></td>
                <td><?= h($festivals->festival_description) ?></td>
                <td><?= h($festivals->festival_start_date) ?></td>
                <td><?= h($festivals->festival_end_date) ?></td>
                <td><?= h($festivals->festival_month) ?></td>
                <td><?= h($festivals->festival_logo_image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Festivals', 'action' => 'view', $festivals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Festivals', 'action' => 'edit', $festivals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Festivals', 'action' => 'delete', $festivals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $festivals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questions') ?></h4>
        <?php if (!empty($venue->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question') ?></th>
                <th scope="col"><?= __('Question Details') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->questions as $questions): ?>
            <tr>
                <td><?= h($questions->id) ?></td>
                <td><?= h($questions->question) ?></td>
                <td><?= h($questions->question_details) ?></td>
                <td><?= h($questions->user_id) ?></td>
                <td><?= h($questions->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
