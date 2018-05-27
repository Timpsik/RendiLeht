<!DOCTYPE html>
<html lang=et>

<head>
	<title><?php echo $pealkiri ?></title>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script async src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')</script>
    <script src="https://www.gstatic.com/charts/loader.js"></script> 
    
    <script src="<?php echo base_url(); ?>assets/js/charts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/kuulutuste_arvu_leidja.js"></script>

    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>

	<script>
		var baseurl = "<?php echo base_url() ?>";
	</script>
<style>
    body{margin:0}nav{display:block}[hidden]{display:none}a{background-color:transparent}small{font-size:80%}img{border:0}input,select{color:inherit;font:inherit;margin:0}select{text-transform:none}input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Source Sans Pro",Calibri,Candara,Arial,sans-serif;font-size:15px;line-height:1.42857143;color:#333333;background-color:#ffffff}input,select{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#2780e3;text-decoration:none}img{vertical-align:middle}small{font-size:86%}ul{margin-top:0;margin-bottom:10.5px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:bold}.form-control{display:block;width:100%;height:43px;padding:10px 18px;font-size:15px;line-height:1.42857143;color:#333333;background-color:#ffffff;background-image:none;border:1px solid #cccccc;border-radius:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.form-control::-moz-placeholder{color:#999999;opacity:1}.form-control:-ms-input-placeholder{color:#999999}.form-control::-webkit-input-placeholder{color:#999999}.form-control::-ms-expand{border:0;background-color:transparent}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:21px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:0}}@media (min-width:768px){.navbar-header{float:left}}.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-brand{float:left;padding:14.5px 15px;font-size:19px;line-height:21px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-nav{margin:7.25px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:21px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14.5px;padding-bottom:14.5px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-inverse{background-color:#2780e3;border-color:#1967be}.navbar-inverse .navbar-brand{color:#ffffff}.navbar-inverse .navbar-nav>li>a{color:#ffffff}.container:before,.container:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after{content:" ";display:table}.container:after,.nav:after,.navbar:after,.navbar-header:after{clear:both}@-ms-viewport{width:device-width}body{-webkit-font-smoothing:antialiased}
</style>
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