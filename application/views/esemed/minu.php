<div class="row">
	<div class="col-md">
		<h1 class="text-center"><?php echo lang("Minu_esemed");?></h1>
	</div>
</div>

<?php foreach($esemed as $ese) : ?>
	<h3><?php echo $ese['nimi']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<small class="item-date"><strong><?php echo $ese['kategooria']; ?></strong>, <?php echo $ese['lisamise_aeg']; ?>, </small><br>
			<?php echo word_limiter($ese['lühikirjeldus'], 50); ?>
			<p><a class="btn btn-default" href="<?php echo site_url('/esemed/'.$ese['slug']); ?>"><?php echo lang("Ava_kuulutus");?></a></p>
		</div>
	</div>
	
<?php endforeach; ?>
<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>