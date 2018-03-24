<div class="row">
		<div class="col-md">
			<h1 class="text-center"><?php echo lang("Kategooriad");?></h1>
			<br>
		</div>
	</div>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item"><a href="<?php echo site_url('/categories/items/'.$category['id']); ?>"><?php echo $category['kategooria']; ?></a>
	</li>
<?php endforeach; ?>
</ul>