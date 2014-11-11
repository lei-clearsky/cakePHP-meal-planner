<div class="ingredients form">
<?php echo $this->Form->create('Ingredient'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ingredient'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Recipe');
		echo $this->Form->input('Shoppinglist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ingredient.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ingredient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shoppinglists'), array('controller' => 'shoppinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shoppinglist'), array('controller' => 'shoppinglists', 'action' => 'add')); ?> </li>
	</ul>
</div>
