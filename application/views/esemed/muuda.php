<?php echo validation_errors(); ?>

<?php echo form_open('esemed/uuenda');?>

<div class="col-md">
	<h1 class="text-center"><?php echo lang("Muuda_kuulutust");?></h1>
</div>

<input name="id" value=<?php echo $ese['id']; ?>">

<div class="form-group">
	<label><?php echo lang("Pealkiri");?></label>
	<input type="text" class="form-control" name="nimi" placeholder=<?php echo lang("Pealkiri");?> value="<?php echo $ese['nimi']; ?>">
</div>

<div class="form-group">
	<label><?php echo lang("Lühikirjeldus");?></label>
	<textarea class="form-control" rows="3" name="lühikirjeldus" id="textArea" placeholder=<?php echo lang("lühikirjeldus");?>><?php echo $ese['lühikirjeldus']; ?></textarea>
</div>

<div class="form-group">
	<label><?php echo lang("Kirjeldus");?></label>
	<textarea id="editor1" class="form-control" name="kirjeldus" placeholder=<?php echo lang("kirjeldus");?>><?php echo $ese['kirjeldus']; ?></textarea>
	<script>CKEDITOR.replace( 'editor1' );</script>
</div>

<div class="form-group">
	<label for="kategooria"><?php echo lang("Kategooria");?></label>
	<select id="kategooria" name="kategooria_id" class="form-control">
		<option value="" disabled selected><?php echo lang('Vali_kategooriad');?></option>
		<?php foreach($kategooriad as $kategooria): ?>
			<option value="<?php echo $kategooria['id']; ?>"><?php echo lang($kategooria['kategooria']); ?></option>
		<?php endforeach; ?>
	</select>
</div>
		<button type="submit" class="btn btn-default"><?php echo lang("Salvesta");?></button>
	</div>
</form>