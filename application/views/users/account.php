<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo lang("Konto");?></h1>
			<br>
			<a href="#" class="btn btn-primary btn-block"><?php echo lang("Broneeringud");?></a>
			<a href="#" class="btn btn-primary btn-block"><?php echo lang("Ajalugu");?></a>
			<a href="#" class="btn btn-primary btn-block"><?php echo lang("Minu_kuulutused");?></a>
			<a href="#" class="btn btn-primary btn-block"><?php echo lang("Konto_seaded");?></a>
			<a href="<?php echo base_url();?>statistics/view" class="btn btn-primary btn-block"><?php echo lang("Statistika");?></a>			

	
		</div>
	</div>
<?php echo form_close(); ?>