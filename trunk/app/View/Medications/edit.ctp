<?php
echo $this->Html->css('jquery-ui.css');
echo $this->Html->css('jquery-ui-timepicker-addon.css');
echo $this->Html->script('jquery-1.10.2.min.js');
echo $this->Html->script('jquery-ui.min.js');
echo $this->Html->script('jquery.ui.slider.js');
echo $this->Html->script('jquery.ui.datepicker.js');
echo $this->Html->script('jquery-ui-timepicker-addon.js');
?>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Medication.id')), null, __('Are you sure you want to delete '.$this->Form->value('Medication.medicationName').' from your list of medications ?', $this->Form->value('Medication.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>

    </ul>
</div>
<div class="medications form">
    <?php echo $this->Form2->create('Medication', array('novalidate' => true)); ?>
    <fieldset>
        <legend><?php echo __('Edit Medication'); ?></legend>
        <?php
        echo $this->Form2->input('medicationName');
        echo $this->Form2->input('strengthEachPill');
        echo $this->Form2->input('doseEachTime');
        echo $this->Form2->input('frequency');
        echo $this->Form2->input('start', array('id' => 'dateTimePickerStart', 'type' => 'text'));
        echo $this->Form2->input('repeatTimes');
        ?>
    </fieldset>
    <?php echo $this->Form2->end(__('Submit')); ?>
</div>

<script type="text/javascript">
    $('#dateTimePickerStart').datetimepicker();
</script>