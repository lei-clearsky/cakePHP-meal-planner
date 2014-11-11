<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Register'); ?></legend>
	<?php
		//echo $this->Form->inputs();
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('bio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>