<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($user['User']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meals'), array('controller' => 'meals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meal'), array('controller' => 'meals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shoppinglists'), array('controller' => 'shoppinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shoppinglist'), array('controller' => 'shoppinglists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Collections'); ?></h3>
	<?php if (!empty($user['Collection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Recipe Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Collection'] as $collection): ?>
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
	<h3><?php echo __('Related Meals'); ?></h3>
	<?php if (!empty($user['Meal'])): ?>
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
	<?php foreach ($user['Meal'] as $meal): ?>
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
<div class="related">
	<h3><?php echo __('Related Shoppinglists'); ?></h3>
	<?php if (!empty($user['Shoppinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Shoppinglist'] as $shoppinglist): ?>
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
