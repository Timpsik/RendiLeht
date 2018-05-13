<div class="row">
	<div class="col-md">
		<h1 class="text-center"><?php echo lang("Renditavad_esemed");?></h1>
	</div>
</div>

<?php foreach($esemed as $ese) : ?>
	<h3><?php echo $ese['nimi']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<small class="item-date"><strong><?php echo $ese['kategooria']; ?></strong>, <?php echo $ese['lisamise_aeg']; ?>, <?php echo $ese['maakond']; ?> - <?php echo $ese['aadress']; ?></small><br>
			<?php echo word_limiter($ese['lühikirjeldus'], 50); ?>
			<p><a class="btn btn-default" href="<?php echo site_url('/esemed/'.$ese['slug']); ?>"><?php echo lang("Ava_kuulutus");?></a></p>
		</div>
	</div>
<?php endforeach; ?>

<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>



<!--  <div class="container">
<div class="table-responsive">
		<table id = "uudisteTabel" class="table table-striped table-responsive">
			<thead>
			<tr>
				<th class="col-xs-1">Id</th>
				<th class="col-xs-6">Pealkiri</th>
				<th class="col-xs-5">Kuupäev</th>
			</tr>
			</thead>
			<tbody>
				<?php $i = 0;
				$hasMoreData = 0;
				$esemed = json_decode($esemetekogu);
				foreach($esemed as $ese): 
					if($i < ESEMEIDESITATUD) {?>
					<tr>
						<td><? echo $ese ?></td>
						<td>
							<button type="button" class="btn link btn-primary-outline" data-toggle="collapse" data-target="#demo<? echo $i ?>"><? echo $ese->kirjeldus ?></button>
						</td>
						<td class = "text-nowrap"><? echo $ese->lühikirjeldus ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div id="demo<? echo $i ?>" class="collapse">
								<? echo $ese->kirjeldus; $i = $i + 1; ?>
							</div>
						</td>
						<td></td>
					</tr>
			<?} else { 
				$hasMoreData = 1;
			} // If lõpp ?>
			<?endforeach ?>
			</tbody>
		</table>
-->
</div>