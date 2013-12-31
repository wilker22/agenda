<div class="grupos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Grupos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Grupo'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Grupos'), array('controller' => 'grupos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Parent Grupo'), array('controller' => 'grupos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Contatos'), array('controller' => 'contatos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Contato'), array('controller' => 'contatos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('title'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('lft'); ?></th>
						<th><?php echo $this->Paginator->sort('rght'); ?></th>
						<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($grupos as $grupo): ?>
					<tr>
						<td><?php echo h($grupo['Grupo']['id']); ?>&nbsp;</td>
						<td><?php echo h($grupo['Grupo']['title']); ?>&nbsp;</td>
						<td><?php echo h($grupo['Grupo']['created']); ?>&nbsp;</td>
						<td><?php echo h($grupo['Grupo']['modified']); ?>&nbsp;</td>
						<td><?php echo h($grupo['Grupo']['lft']); ?>&nbsp;</td>
						<td><?php echo h($grupo['Grupo']['rght']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($grupo['ParentGrupo']['title'], array('controller' => 'grupos', 'action' => 'view', $grupo['ParentGrupo']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<i class="glyphicon glyphicon-search"></i> ' , array('action' => 'view', $grupo['Grupo']['id']),  array('class' => 'btn btn-info', 'tabindex' => '-1','escape' => false )); ?>
							<?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i> ' , array('action' => 'edit', $grupo['Grupo']['id']),  array('class' => 'btn btn-warning', 'tabindex' => '-1','escape' => false )); ?>
							<?php echo $this->Form->postLink('<i class="glyphicon glyphicon-remove"></i> ', array('action' => 'delete', $grupo['Grupo']['id']), array('class' => 'btn btn-danger', 'tabindex' => '-1','escape' => false), __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->