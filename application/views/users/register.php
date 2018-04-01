<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo lang("Registreeru");?></h1>
			<div class="form-group">
				<label for="eesnimi"><?php echo lang("Eesnimi");?></label>
				<input id="eesnimi" type="text" class="form-control" name="eesnimi" placeholder="<?php echo lang("Eesnimi");?>">
				</div>
			<div class="form-group">
				<label for="perenimi"><?php echo lang("Perenimi");?></label>
				<input id="perenimi" type="text" class="form-control" name="perenimi" placeholder="<?php echo lang("Perenimi");?>">
			</div>
			<div class="form-group">
				<label for="email"><?php echo lang("Email");?></label>
				<input id="email" type="email" class="form-control" name="email" placeholder="<?php echo lang("Email");?>">
			</div>
			<div class="form-group">
				<label for="telefon"><?php echo lang("Telefoni_number");?></label>
				<input id="telefon" type="tel" class="form-control" name="telefon" placeholder="<?php echo lang("Telefoni_number");?>">
			</div>
			<div class="form-group">
				<label for="parool"><?php echo lang("Parool");?></label>
				<input id="parool" type="password" class="form-control" name="parool" placeholder=<?php echo lang("Parool");?>>
			</div>
			<div class="form-group">
				<label for="parool2"><?php echo lang("Kinnita_parool");?></label>
				<input id="parool2" type="password" class="form-control" name="parool2" placeholder=<?php echo lang("Parool");?>>
			</div>
			<button type="submit" class="btn btn-primary btn-block"><?php echo lang("Registreeru");?></button>
		</div>
	</div>
<?php echo form_close(); ?>


