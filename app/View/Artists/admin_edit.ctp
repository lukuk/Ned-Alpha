<div class="page-header">
	<h1>Editer un artiste</h1>
</div>

<?php echo $this->Form->create('Artist'); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
	<?php echo $this->Form->input('description',array('label'=>"Description")); ?>
	<?php echo $this->Form->input('image',array('label'=>"Image")); ?>
	<?php echo $this->Form->input('coutry_id',array('label'=>'Pays')); ?>
	<?php echo $this->Form->input('style_id',array('label'=>'Style')); ?>
<?php echo $this->Form->end('Envoyer'); ?>