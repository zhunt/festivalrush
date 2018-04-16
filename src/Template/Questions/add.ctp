
<?php $cell = $this->cell('Navbar'); echo $cell; ?>




<div class="container">


<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>


    <fieldset>
        <legend><?= __('Ask Question') ?></legend>
        <?php
        echo $this->Form->control( 'user_id', ['value' => $currentUser, 'type' => 'hidden']);
            echo $this->Form->control('question');
            echo $this->Form->control('question_details');
            //echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('festivals._ids', ['options' => $festivals]);
            echo $this->Form->control('venues._ids', ['options' => $venues]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

</div>
<?php $cell = $this->cell('Footer'); echo $cell; ?>