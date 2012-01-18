<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="description" content="Ned beta">
    <meta name="author" content="David Cruchon">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>">
	<?php echo $this->Html->script('less'); ?>

</head>

<body>

	<div class="topbar">
    	<div class="topbar-inner">
    		<div class="container">
        		<h3><?php echo $this->Html->link("ADMINISTRATION",'/admin'); ?></h3>
        		<ul>
                    <li><?php echo $this->Html->link("Voir le site",'/'); ?>
                    <li><?php echo $this->Html->link("Artists",array('action'=>'index','controller'=>'artists')); ?></li>
                    <li><?php echo $this->Html->link("Events",array('action'=>'index','controller'=>'events')); ?></li>
                </ul>
	        </div>
    	</div>
    </div>

    <div class="container">
        <?php echo $this->Session->flash(); ?>
        <?php echo $content_for_layout; ?>
    </div>

    <?php echo $this->element('sql_dump'); ?>

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php echo $this->Html->script('admin'); ?>
<?php echo $scripts_for_layout; ?>
</html>
