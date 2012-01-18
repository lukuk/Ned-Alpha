
<h3>Ajouter une image</h3>

<?php echo $this->Form->create('Media',array('type' => 'file')); ?>
	<?php echo $this->Form->input('file',array('label' => 'Image (PNG/JPG)','type' => 'file')); ?>
	<?php echo $this->Form->input('name',array('label'=> "Nom de l'image")); ?>
<?php echo $this->Form->end('Ajouter'); ?>