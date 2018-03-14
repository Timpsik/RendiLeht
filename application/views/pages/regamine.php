<h2><?php echo 'Registreeri'; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('pages/regamine'); ?>

		<h3 id="mail" >E-mail:</h3> 
		<br><br>
		<input id="meil" type="text" name="meil" size="40">
		<br><br>
		<h3 id="mail" >Parool:</h3>
		<br><br>
		<input id="nimi" type="text" name="nimi" size="40">
		<input type="submit" name="Registreeri" value="Add person" />
	</form>
	
	