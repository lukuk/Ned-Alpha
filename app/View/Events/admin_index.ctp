<div class="page-header">
	<h1>Gérer les Events</h1>
</div>

<p><?php echo $this->Html->link("Ajouter un event",array('action'=>'edit'),array('class' => 'btn primary')); ?></p>

<table class="bordered-table zebra-striped">
	<tr>
		<th>Nom</th>
		<th>Description</th>
		<th>Date</th>
		<th>Image</th>
		<th>Prix</th>
		<th>Age</th>
		<th>Salle</th>
		<th>Online</th>
		<th>Actions</th>
	</tr>
	<?php foreach($events as $k => $v): $v = current($v); ?>
	<tr>
		<td><?php echo $v['name']; ?></td>
		<td><?php echo $v['description']; ?></td>
		<td><?php echo $v['date']; ?></td>
		<td><?php echo $v['image']; ?></td>
		<td><?php echo $v['price']; ?></td>
		<td><?php echo $v['age']; ?></td>
		<td><?php echo $v['hall_id']; ?></td>
		<td><?php echo $v['online']=='0'?'<span class="label important">Hors ligne</span>':'<span class="label success">En ligne</span>'; ?></td>
		<td>
			<?php echo $this->Html->link("Editer",array('action' => 'edit',$v['id']),array('class' => 'label notice')); ?>
			<?php echo $this->Html->link("Supprimer",array('action' => 'delete',$v['id']),array('class' => 'label notice'),'Voulez-vous vraiment supprimer cet EVENT ?'); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->Paginator->numbers(); ?>
