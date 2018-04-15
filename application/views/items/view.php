
<small class="item-date"><?php echo lang("Lisamise_aeg");?> <?php echo $item['lisamise_aeg']; ?></small>
<br>
<img src="<?php echo site_url(); ?>assets/images/items/<?php echo $item['item_image']; ?> " alt="Kuulutust illustreeriv pilt">
<div class="item-body">
	<?php echo $item['kirjeldus']; ?>
</div>

<?php if($this->session->userdata('user_id') == $item['kasutaja_id']): ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>items/edit/<?php echo $item['slug']; ?>"><?php echo lang("Muuda");?></a>
	<?php echo form_open('/items/delete/'.$item['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif; ?>
<div id="googleMap1" style="width:400px;height:300px;"> 
	<?php echo $item['aadress']; ?>
</div>
<?php echo "Asukoht: " . $item['aadress']; ?>
<hr>
<div>
<form action="/Bank/pay" method="post">
  <input  type="radio" name="price" value="<?php echo $item['tunnis']?>" checked> <?php echo lang("Tunnihind") . ": " . $item['tunnis'] ." eur";?><br>
  <input  type="radio" name="price" value="<?php echo $item['päevas']?>"> <?php echo lang("Päevahind") . ": " . $item['päevas'] ." eur";?><br>
  <input  type="radio" name="price" value="<?php echo $item['nädalas']?>"> <?php echo lang("Nädalahind") . ": " . $item['nädalas'] ." eur";?><br>
  <input  type="radio" name="price" value="<?php echo $item['kuus']?>"> <?php echo lang("Kuuhind") . ": " . $item['kuus'] ." eur";?><br>
  <input type=hidden class="form-control" name="nimi" value="<?php echo $item['nimi']; ?>">
  <input type=hidden class="form-control" name="omanik" value="<?php echo $item['kasutaja_id']?>">
  <input type="submit" value=<?php echo lang("Osta");?>>
  
</form>
<h3><?php echo lang("Kommentaarid");?></h3>

<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['tekst']; ?> [<strong><?php echo $comment['autori_nimi']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p><?php echo lang("Kommentaarid_puuduvad");?></p>
<?php endif; ?>

<hr>
<h3><?php echo lang("Lisa_kommentaar");?></h3>
<?php echo validation_errors(); ?>
<?php $meetod=$item['nimi'];
echo form_open('items/'.$item['slug'],array('id'=>"kommentaari_lisamine",'method'=>'post')); ?>
	<div id=lisa_kommentaar class="form-group">
		<input type=hidden id="autor" class="form-control" name="autor" value="<?php echo $this->session->userdata('user_name')?>">
		<input type=hidden id="autori_id" class="form-control" name="autori_id" value="<?php echo $this->session->userdata('user_id')?>">
		<label for="kommentaar"><?php echo lang("Tekst");?></label>
		<textarea id="kommentaar" name="tekst" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $item['slug']; ?>">
	<button id="submitComment" class="btn btn-primary" type="submit"><?php echo lang("Saada");?></button>
</form>
