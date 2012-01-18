<?php $artist = current($artist); ?>

<?php $this->set('title_for_layout','Artiste :: '.$artist['name']); ?>

<div class="page-header">
	<h1><?php echo $artist['name']; ?></h1>
</div>
<p><?php echo $artist['description']; ?></p>