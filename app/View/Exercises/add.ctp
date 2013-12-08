<div class="exercises form">
    <?php echo $this->Form2->create('Exercise'); ?>
    <fieldset>
        <legend><?php echo __('Add Exercise'); ?></legend>
        <?php
        echo $this->Form2->input('date');
        echo $this->Form2->input('durationMinute');
        echo $this->Form2->input('exercise_type');
        echo $this->Form2->input('comment');
        ?>
    </fieldset>
    <?php echo $this->Form2->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
