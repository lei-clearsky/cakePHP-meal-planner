<div class="recipes view">
<h2><?php echo __('Recipe'); ?></h2>
		<h3><?php echo __('Id'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['id']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Name'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['name']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Url'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['url']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Imgurl'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['imgurl']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Instruction'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['instruction']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Created'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['created']); ?>
			&nbsp;
		</p>
		<h3><?php echo __('Modified'); ?></h3>
		<p>
			<?php echo h($recipe['Recipe']['modified']); ?>
			&nbsp;
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recipe'), array('action' => 'edit', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recipe'), array('action' => 'delete', $recipe['Recipe']['id']), array(), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meals'), array('controller' => 'meals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meal'), array('controller' => 'meals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Collections'); ?></h3>
	<?php if (!empty($recipe['Collection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Recipe Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recipe['Collection'] as $collection): ?>
		<tr>
			<td><?php echo $collection['id']; ?></td>
			<td><?php echo $collection['user_id']; ?></td>
			<td><?php echo $collection['recipe_name']; ?></td>
			<td><?php echo $collection['created']; ?></td>
			<td><?php echo $collection['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'collections', 'action' => 'view', $collection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'collections', 'action' => 'edit', $collection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'collections', 'action' => 'delete', $collection['id']), array(), __('Are you sure you want to delete # %s?', $collection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ingredients'); ?></h3>
	<?php if (!empty($recipe['Ingredient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recipe['Ingredient'] as $ingredient): ?>
		<tr>
			<td><?php echo $ingredient['id']; ?></td>
			<td><?php echo $ingredient['name']; ?></td>
			<td><?php echo $ingredient['created']; ?></td>
			<td><?php echo $ingredient['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ingredients', 'action' => 'view', $ingredient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ingredients', 'action' => 'edit', $ingredient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ingredients', 'action' => 'delete', $ingredient['id']), array(), __('Are you sure you want to delete # %s?', $ingredient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Meals'); ?></h3>
	<?php if (!empty($recipe['Meal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recipe['Meal'] as $meal): ?>
		<tr>
			<td><?php echo $meal['id']; ?></td>
			<td><?php echo $meal['user_id']; ?></td>
			<td><?php echo $meal['name']; ?></td>
			<td><?php echo $meal['type']; ?></td>
			<td><?php echo $meal['date']; ?></td>
			<td><?php echo $meal['time']; ?></td>
			<td><?php echo $meal['note']; ?></td>
			<td><?php echo $meal['created']; ?></td>
			<td><?php echo $meal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meals', 'action' => 'view', $meal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meals', 'action' => 'edit', $meal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meals', 'action' => 'delete', $meal['id']), array(), __('Are you sure you want to delete # %s?', $meal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meal'), array('controller' => 'meals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
