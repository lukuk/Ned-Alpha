<?php $this->set('title_for_layout','Event :: '.$event['Event']['name']); ?>

<div class="page-header">
	<h1><?php echo $event['Event']['name']; ?></h1>
</div>
<p><?php echo $event['Event']['description']; ?></p>
<p>Date : <?php echo $event['Event']['date']; ?></p>
<p>Created : <?php echo $event['Event']['created']; ?></p>