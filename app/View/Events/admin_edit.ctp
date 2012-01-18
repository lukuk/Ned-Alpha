<div class="page-header">
	<h1>Editer un event</h1>
</div>

<?php echo $this->Form->create('Event'); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('online',array('label'=>"En ligne ?")); ?>
	<?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
	<?php echo $this->Form->input('description',array('label'=>"Description")); ?>
	<?php echo $this->Form->input('date',array('type' => 'text','label'=>"Date")); ?>
	<?php echo $this->Form->input('image',array('label'=>"Image")); ?>
	<?php echo $this->Form->input('price', array(
		'label'		=> 'Prix',
		'type'		=> 'text',
		'class'		=> 'mini',
		'between'	=> '<div class="input-append">',
		'after'		=>	'<span class="add-on">CHF</span></div>'
		)); ?>

	<?php echo $this->Form->input('age',array(
		'label'		=>	'Age',
		'type'		=>	'text',
		'class'		=>	'mini',
		'between'	=>	'<div class="input-append">',
		'after'		=>	'<span class="add-on">ANS</span></div>'
	)); ?>

	<?php echo $this->Form->input('hall_id',array('label'=>"Salle")); ?>
<?php echo $this->Form->end('Envoyer'); ?>