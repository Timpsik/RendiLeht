<?php echo form_open('kasutajad/sisselogimine'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo lang("Logi_sisse");?></h1>
			
			<div class="form-group">
			    <label for="email" hidden>Email:</label>
				<input id="email" type="text" name="email" class="form-control" placeholder=<?php echo lang("Email");?>>
			</div>
			
			<div class="form-group">
			    <label for="parool" hidden>Parool:</label>
				<input id="parool" type="password" name="parool" class="form-control" placeholder=<?php echo lang("Parool");?>>
			</div>
			
			<button type="submit" class="btn btn-primary btn-block"><?php echo lang("Logi_sisse");?></button>
			<a href="<?php echo base_url();?>kasutajad/smartIDgasisselogimine" class="btn btn-primary btn-block">Sisene SmartID-ga</a>	
		</div>
	</div>
<?php echo form_close(); ?>