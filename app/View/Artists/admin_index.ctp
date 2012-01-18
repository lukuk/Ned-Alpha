<div class="page-header">
	<h1>Gérer les Artistes</h1>
</div>

<p><?php echo $this->Html->link("Ajouter un artiste",array('action'=>'edit'),array('class' => 'btn primary')); ?></p>

<table class="bordered-table zebra-striped">
	<tr>
		<th>Nom</th>
		<th>Description</th>
		<th>Image</th>
		<th>Pays</th>
		<th>Style</th>
		<th>Actions</th>
	</tr>
	<?php foreach($artists as $k => $v): $v = current($v); ?>
	<tr>
		<td><?php echo $v['name']; ?></td>
		<td><?php echo $v['description']; ?></td>
		<td><?php echo $v['image']; ?></td>
		<td><?php echo $v['country_id']; ?></td>
		<td><?php echo $v['style_id']; ?></td>
		<td>
			<?php echo $this->Html->link("Editer",array('action' => 'edit',$v['id']),array('class' => 'label notice')); ?>
			<?php echo $this->Html->link("Supprimer",array('action' => 'delete',$v['id']),array('class' => 'label notice'),'Voulez-vous vraiment supprimer cet ARTISTE ?'); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->Paginator->numbers(); ?>
