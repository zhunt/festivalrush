<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Festival $festival
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Festivals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="festivals form large-9 medium-8 columns content">
    <?= $this->Form->create($festival) ?>
    <fieldset>
        <legend><?= __('Add Festival') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('festival_description');
            echo $this->Form->control('festival_start_date');
            echo $this->Form->control('festival_end_date');
            echo $this->Form->control('festival_month');
            echo $this->Form->control('festival_logo_image');
            echo $this->Form->control('questions._ids', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
