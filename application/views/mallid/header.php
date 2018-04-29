<!DOCTYPE html>
<html lang=et>

<head>
	<title><?php echo $pealkiri ?></title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <script src="https://www.gstatic.com/charts/loader.js"></script> 

    <script src="<?php echo base_url(); ?>assets/js/charts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/maps.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/offline.min.js"></script>	
    <script src="<?php echo base_url(); ?>assets/js/offline.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/kuulutuste_arvu_leidja.js"></script>

    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>

	<script>
		var baseurl = "<?php echo base_url() ?>";
	</script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script async src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDokQNZshQlGU0CI4ukO4yj4xpeli-S5Jc&callback=myMap"></script>



</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">RENDILEHT</a>
			</div>

			<div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>kkk"><?php echo lang("KKK");?></a></li>
					<li><a href="<?php echo base_url(); ?>esemed"><?php echo lang("Renditavad_esemed");?></a></li>
					<li><a href="<?php echo base_url(); ?>kategooriad"><?php echo lang("Kategooriad");?></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

					<?php if(!$this->session->userdata('sisselogitud')) : ?>
						<li><a href="<?php echo base_url(); ?>kasutajad/sisselogimine"><?php echo lang("Logi_sisse");?></a></li>
						<li><a href="<?php echo base_url(); ?>kasutajad/registreerimine"><?php echo lang("Registreeru");?></a></li>
					<?php endif; ?>

					<?php if($this->session->userdata('sisselogitud')) : ?>
						<li><a href="<?php echo base_url(); ?>kasutajad/konto"><?php echo lang("Konto");?></a></li>
						<li><a href="<?php echo base_url(); ?>esemed/lisa"><?php echo lang("Lisa_kuulutus");?></a></li>
						<li><a href="<?php echo base_url(); ?>kasutajad/valjalogimine"><?php echo lang("Logi_välja");?></a></li>
					<?php endif; ?>

					<li>
						<label for="keel" hidden> Vali keel</label>
						<select id="keel" class="my" onchange="javascript:window.location.href='<?php echo base_url(); ?>Keelevahetaja/vaheta_keelt/'+this.value;">
							<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Eesti keel</option>
							<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
						</select>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('item_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('item_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('item_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('item_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('item_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('item_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>
