<div class="row">
	<div class="col-md">
		<h1 class="text-center"><?php echo lang("Kategooriad");?></h1>
		<br>
	</div>
</div>

<ul class="list-group">
	<?php foreach($kategooriad as $kategooria):?>
		<li class="list-group-item"><a href="<?php echo site_url('/kategooriad/esemed/'.$kategooria['id']); ?>"><?php echo $kategooria['kategooria']; ?></a></li>
	<?php endforeach; ?>
</ul>	