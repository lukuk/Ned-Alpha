<ul>
<?php foreach($events as $k => $v): ?>
	<li><?php echo $this->Html->link($v['Event']['name'],array('action'=>'view',$v['Event']['id'])); ?></li>
<?php endforeach; ?>
</ul>