<script>
var aadress = "<?php echo $aadress; ?>";
</script>
<script async defer src="<?php echo base_url(); ?>assets/js/laeRohkemKommentaare.js"></script>
<script type='text/javascript'>var php_KUVATUDKOMMENTAARE = <?php echo KUVATUDKOMMENTAARE ?></script>
<small class="item-date"><?php echo lang("Lisamise_aeg");?> <?php echo $ese['lisamise_aeg']; ?></small>
<br>
<a id="show_image">Ava või sulge pilt</a><br>
<img id="my_images" src="<?php echo site_url(); ?>assets/images/esemed/<?php echo $ese['item_image']; ?> " alt="Kuulutust illustreeriv pilt">


<div class="item-body">
	<?php echo $ese['kirjeldus']; ?>
</div>

<?php if($this->session->userdata('kasutaja_id') == $ese['kasutaja_id']): ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>esemed/muuda/<?php echo $ese['slug']; ?>"><?php echo lang("Muuda");?></a>
	<?php echo form_open('/esemed/kustuta/'.$ese['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif; ?>

<div id="googleMap1" style="width:400px;height:300px;"> 
	<?php echo $ese['aadress']; ?>
</div>

<?php echo "Asukoht: " . $ese['aadress']; ?>
<hr>

<div>
	<form action="/pank/maksa" method="post">
		<input  type="radio" name="price" value="<?php echo $ese['tunnis']?>" checked> <?php echo lang("Tunnihind") . ": " . $ese['tunnis'] ." eur";?><br>
		<input  type="radio" name="price" value="<?php echo $ese['päevas']?>"> <?php echo lang("Päevahind") . ": " . $ese['päevas'] ." eur";?><br>
		<input  type="radio" name="price" value="<?php echo $ese['nädalas']?>"> <?php echo lang("Nädalahind") . ": " . $ese['nädalas'] ." eur";?><br>
		<input  type="radio" name="price" value="<?php echo $ese['kuus']?>"> <?php echo lang("Kuuhind") . ": " . $ese['kuus'] ." eur";?><br>
		<input type=hidden class="form-control" name="nimi" value="<?php echo $ese['nimi']; ?>">
		<input type=hidden class="form-control" name="omanik" value="<?php echo $ese['kasutaja_id']?>">
		<input type="submit" value=<?php echo lang("Osta");?>>
  
</form>
</div>
	<h3><?php echo lang("Kommentaarid");?></h3>

	<?php if($kommentaarid) : ?>
		<?php foreach($kommentaarid as $kommentaar) : ?>
			<div class="well">
				<h5><?php echo $kommentaar['tekst']; ?> [<strong><?php echo $kommentaar['autori_nimi']; ?></strong>]</h5>
			</div>
		<?php endforeach; ?>

	<?php else : ?>
		<p><?php echo lang("Kommentaarid_puuduvad");?></p>
	<?php endif; ?>
	<hr>

	<h3><?php echo lang("Lisa_kommentaar");?></h3>
	<?php echo validation_errors(); ?>
	<?php $meetod=$ese['nimi'];
	echo form_open('esemed/'.$ese['slug'],array('id'=>"kommentaari_lisamine",'method'=>'post')); ?>
	<div id=lisa_kommentaar class="form-group">
		<input type=hidden id="autor" class="form-control" name="autor" value="<?php echo $this->session->userdata('kasutaja_eesnimi')?>">
		<input type=hidden id="autori_id" class="form-control" name="autori_id" value="<?php echo $this->session->userdata('kasutaja_id')?>">
		<label for="kommentaar"><?php echo lang("Tekst");?></label>
		<textarea id="kommentaar" name="tekst" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $ese['slug']; ?>">
	<button id="submitComment" class="btn btn-primary" type="submit"><?php echo lang("Saada");?></button>
</form>