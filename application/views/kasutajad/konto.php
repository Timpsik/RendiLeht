<?php echo form_open('kasutajad/sisselogimine'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo lang("Konto");?></h1>
			<br>
			<a href="<?php echo base_url();?>kasutajad/broneeringud"" class="btn btn-primary btn-block"><?php echo lang("Broneeringud");?></a>
			<a href="<?php echo base_url();?>kasutajad/ajalugu"" class="btn btn-primary btn-block"><?php echo lang("Ajalugu");?></a>
			<a href="<?php echo base_url();?>esemed/minu"" class="btn btn-primary btn-block"><?php echo lang("Minu_kuulutused");?></a>
			<a href="<?php echo base_url();?>kasutajad/seaded" class="btn btn-primary btn-block"><?php echo lang("Konto_seaded");?></a>
			<a href="<?php echo base_url();?>statistika" class="btn btn-primary btn-block"><?php echo lang("Statistika");?></a>			
		</div>
	</div>
<?php echo form_close(); ?>