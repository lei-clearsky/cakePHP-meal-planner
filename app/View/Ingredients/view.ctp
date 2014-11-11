<div class="ingredients view">
<h2><?php echo __('Ingredient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingredient['Ingredient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ingredient['Ingredient']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ingredient['Ingredient']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ingredient['Ingredient']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingredient'), array('action' => 'edit', $ingredient['Ingredient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingredient'), array('action' => 'delete', $ingredient['Ingredient']['id']), array(), __('Are you sure you want to delete # %s?', $ingredient['Ingredient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shoppinglists'), array('controller' => 'shoppinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shoppinglist'), array('controller' => 'shoppinglists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recipes'); ?></h3>
	<?php if (!empty($ingredient['Recipe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Imgurl'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ingredient['Recipe'] as $recipe): ?>
		<tr>
			<td><?php echo $recipe['id']; ?></td>
			<td><?php echo $recipe['name']; ?></td>
			<td><?php echo $recipe['url']; ?></td>
			<td><?php echo $recipe['imgurl']; ?></td>
			<td><?php echo $recipe['rating']; ?></td>
			<td><?php echo $recipe['created']; ?></td>
			<td><?php echo $recipe['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recipes', 'action' => 'view', $recipe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recipes', 'action' => 'edit', $recipe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recipes', 'action' => 'delete', $recipe['id']), array(), __('Are you sure you want to delete # %s?', $recipe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shoppinglists'); ?></h3>
	<?php if (!empty($ingredient['Shoppinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ingredient['Shoppinglist'] as $shoppinglist): ?>
		<tr>
			<td><?php echo $shoppinglist['id']; ?></td>
			<td><?php echo $shoppinglist['user_id']; ?></td>
			<td><?php echo $shoppinglist['name']; ?></td>
			<td><?php echo $shoppinglist['created']; ?></td>
			<td><?php echo $shoppinglist['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shoppinglists', 'action' => 'view', $shoppinglist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shoppinglists', 'action' => 'edit', $shoppinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shoppinglists', 'action' => 'delete', $shoppinglist['id']), array(), __('Are you sure you want to delete # %s?', $shoppinglist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shoppinglist'), array('controller' => 'shoppinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
