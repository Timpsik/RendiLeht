<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo lang("Logi_sisse");?></h1>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder=<?php echo lang("Email");?> required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="parool" class="form-control" placeholder=<?php echo lang("Parool");?> required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block"><?php echo lang("Logi_sisse");?></button>
		</div>
	</div>
<?php echo form_close(); ?>