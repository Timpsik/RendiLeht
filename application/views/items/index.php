<div class="row">
		<div class="col-md">
			<h1 class="text-center"><?php echo lang("Renditavad_esemed");?></h1>
		</div>
	</div>
<?php foreach($items as $item) : ?>
	<h3><?php echo $item['nimi']; ?></h3>

	<div class="row">
		<div class="col-md-9">
			<small class="item-date"><strong><?php echo $item['kategooria']; ?></strong>, <?php echo $item['lisamise_aeg']; ?>, [Postitaja nimi], [saadavus]</small><br>
		<?php echo word_limiter($item['lühikirjeldus'], 50); ?>

		<p><a class="btn btn-default" href="<?php echo site_url('/items/'.$item['slug']); ?>"><?php echo lang("Ava_kuulutus");?></a></p>
		</div>
	</div>

<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>