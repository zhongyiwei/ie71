<div class="templates form">
<?php echo $this->Form->create('Template'); ?>
	<fieldset>
		<legend><?php echo __('Add Template'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?></li>
	</ul>
</div>
