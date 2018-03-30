<script type="text/javascript">
  var aadress = "<?php print $aadress; ?>";
</script>
<small class="item-date"><?php echo lang("Lisamise_aeg");?> <?php echo $item['lisamise_aeg']; ?></small>
<br>

<div class="item-body">
	<?php echo $item['kirjeldus']; ?>
</div>

<?php if($this->session->userdata('user_id') == $item['kasutaja_id']): ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $item['slug']; ?>"><?php echo lang("Muuda");?></a>
	<?php echo form_open('/items/delete/'.$item['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif; ?>
<div id="googleMap1" style="width:400px;height:300px;"></div>
<hr>

<h3><?php echo lang("Kommentaarid");?></h3>

<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['tekst']; ?> [<strong>kommenteerija nimi</strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p><?php echo lang("Kommentaarid_puuduvad");?></p>
<?php endif; ?>

<hr>
<h3><?php echo lang("Lisa_kommentaar");?></h3>

<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$item['id']); ?>
	<div class="form-group">
		<label><?php echo lang("Tekst");?></label>
		<textarea name="tekst" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $item['slug']; ?>">
	<button class="btn btn-primary" type="submit"><?php echo lang("Saada");?></button>
</form>
