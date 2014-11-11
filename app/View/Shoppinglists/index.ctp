<div class="shoppinglists index">
	<h2><?php echo __('Shoppinglists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($shoppinglists as $shoppinglist): ?>
	<tr>
		<td><?php echo h($shoppinglist['Shoppinglist']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shoppinglist['User']['name'], array('controller' => 'users', 'action' => 'view', $shoppinglist['User']['id'])); ?>
		</td>
		<td><?php echo h($shoppinglist['Shoppinglist']['name']); ?>&nbsp;</td>
		<td><?php echo h($shoppinglist['Shoppinglist']['created']); ?>&nbsp;</td>
		<td><?php echo h($shoppinglist['Shoppinglist']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shoppinglist['Shoppinglist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shoppinglist['Shoppinglist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shoppinglist['Shoppinglist']['id']), array(), __('Are you sure you want to delete # %s?', $shoppinglist['Shoppinglist']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shoppinglist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
