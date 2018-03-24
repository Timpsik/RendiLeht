	<div class="col-md">
	  <h1 class="text-center"><?php echo lang("Lisa_kuulutus");?></h1>
	</div>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('items/create'); ?>

  <div class="form-group">
	<label><?php echo lang("Pealkiri");?></label>
	<input type="text" class="form-control" name="nimi" placeholder=<?php echo lang("Pealkiri");?>>
  </div>

  <div class="form-group">
  	<label><?php echo lang("Lühikirjeldus");?></label>
  <textarea class="form-control" rows="3" name="lühikirjeldus" id="textArea"></textarea>
  </div>
  <div class="form-group">
	<label><?php echo lang("Kirjeldus");?></label>
	<textarea id="editor1" class="form-control" name="kirjeldus" placeholder=<?php echo lang("Kirjeldus");?>></textarea>
  </div>

  <div class="form-group">
	  <label><?php echo lang("Kategooria");?></label>
	  <select name="kategooria_id" class="form-control">
		  <?php foreach($categories as $category): ?>
			<option value="<?php echo $category['id']; ?>"><?php echo $category['kategooria']; ?></option>
		  <?php endforeach; ?>
	  </select>
	</div>
	<div class="form-group">
		<label><?php echo lang("Asukoht");?></label>
		<select name="asukoht" class="form-control"></div>
			<option value="Kõik">Kõik</option>
			<option value="Harjumaa">Harjumaa</option>
			<option value="Tartumaa">Tartumaa</option>
			<option value="Ida-virumaa">Ida-Virumaa</option>
			<option value="Lääne-Virumaa">Lääne-Virumaa</option>
			<option value="Viljandimaa">Viljandimaa</option>
			<option value="Raplamaa">Raplamaa</option>
			<option value="Võrumaa">Võrumaa</option>
			<option value="Saaremaa">Saaremaa</option>
			<option value="Jõgevamaa">Jõgevamaa</option>
			<option value="Järvamaa">Järvamaa</option> 
			<option value="Valgamaa">Valgamaa</option>
			<option value="Põlvamaa">Põlvamaa</option>
			<option value="Läänemaa">Läänemaa</option>
			<option value="Hiiumaa">Hiiumaa</option>   
	  </select></div>

	<div class="form-group">
	<label><?php echo lang("Hind");?></label>
	<input type="text" class="form-control" name="tund" placeholder=<?php echo lang("Tund");?>>
	<input type="text" class="form-control" name="päev" placeholder=<?php echo lang("Päev");?>>
	<input type="text" class="form-control" name="nädal" placeholder=<?php echo lang("Nädal");?>>
	<input type="text" class="form-control" name="kuu" placeholder=<?php echo lang("Kuu");?>>
	</div>
  <div class="form-group">
	<button type="submit" class="btn btn-default"><?php echo lang("Salvesta");?></button>
</div>
  </form>