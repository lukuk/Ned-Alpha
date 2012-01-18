<div class="alert-message <?php echo isset($type)?$type:'success'; ?>">
<a href="#" class="close" onclick="$(this).parent().slideUp()">X</a>
<p><?php echo $message; ?></p>
</div>