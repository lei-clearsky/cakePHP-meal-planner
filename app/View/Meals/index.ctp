	<div class="jumbotron text-center">
		<h1><?php echo __('Meals'); ?></h2>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<?php echo $this->Html->link(
					$this->Html->tag('span', '', array('class' => 'glyphicon large glyphicon-plus')),
					array(
						'controller' => 'meals', 'action' => 'add'
					),
					array(
						'escapeTitle' => false
					)
				); 
				?>
				<a href="#"><span class="glyphicon large glyphicon-calendar"></span></a>
				<a href="#"><span class="glyphicon large glyphicon-shopping-cart"></span></a>
				<a href="#"><span class="glyphicon large glyphicon-list-alt"></span></a>
			</div>
		</div>
	</div>
	<!--<div class="meals index">-->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($meals as $meal): ?>
	<tr>
		<td><?php echo h($meal['Meal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meal['User']['name'], array('controller' => 'users', 'action' => 'view', $meal['User']['id'])); ?>
		</td>
		<td><?php echo h($meal['Meal']['name']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['type']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['date']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['time']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['note']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['created']); ?>&nbsp;</td>
		<td><?php echo h($meal['Meal']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meal['Meal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meal['Meal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meal['Meal']['id']), array(), __('Are you sure you want to delete # %s?', $meal['Meal']['id'])); ?>
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
</div><!--end col-->
</div><!--end row-->

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel-group" id="accordion">

			<?php 
			$first = true;
			foreach ($meals as $meal): ?>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h3 class="panel-title text-center">
			        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo h($meal['Meal']['id']); ?>">
			          <?php echo h($meal['Meal']['time']); ?>
			        </a>
			      </h3>
			    </div>
			    <?php if ($first):{ ?>
			    	<div id="<?php echo h($meal['Meal']['id']); ?>" class="panel-collapse collapse in">
			    	<?php $first = false; ?>
			    <?php } else: { ?>
			    	<div id="<?php echo h($meal['Meal']['id']); ?>" class="panel-collapse collapse">
			    <?php } endif; ?>
			      	<div class="panel-body">
				      	<h4>Name: <?php echo h($meal['Meal']['name']); ?></h4>
				      	<h4>Type: <?php echo h($meal['Meal']['type']); ?></h4>
				      	<h4>Note: <?php echo h($meal['Meal']['note']); ?></h4>
				      	<h4>
				      		<!--<pre><?php print_r($meal) ?></pre>-->
				      		<?php if (!empty($meal['Recipe'])): ?>
				      		<?php foreach ($meal['Recipe'] as $recipe): ?>
								<p><?php echo $recipe['name']; ?></p>
								<p><?php echo $recipe['url']; ?></p>
								<p><?php echo $recipe['imgurl']; ?></p>
								<p><?php echo $recipe['rating']; ?></p>
							<?php endforeach; ?>
							<?php endif ?>
				      	</h4>

				      	<div class="text-center">
				      		<button type="button" class="btn btn-primary"><?php echo $this->Html->link(__('View'), array('action' => 'view', $meal['Meal']['id'])); ?>
				      		</button>
				      		<button type="button" class="btn btn-primary">
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meal['Meal']['id'])); ?>
							</button>
							<button type="button" class="btn btn-primary"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meal['Meal']['id']), array(), __('Are you sure you want to delete # %s?', $meal['Meal']['id'])); ?>
							</button>
						</div>

			      </div>
			    </div>
			  </div>
			  <?php endforeach; ?>
		</div>
	</div>
</div>


<!--
<div class="row">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Meal'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->
