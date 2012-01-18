<ol>
<?php foreach($artists as $k => $v): $v = current($v); ?>
	<li><?php echo $this->Html->link($v['name'],array('action'=>'view',$v['id'])); ?></li>	
<?php endforeach; ?>
</ol>