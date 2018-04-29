<!DOCTYPE html>
<html lang="et">

	<head>
		<title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>	
   <script src="https://www.gstatic.com/charts/loader.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
	<script>
  var baseurl = "<?php echo base_url() ?>";
</script>
  <script src="<?php echo base_url(); ?>/assets/js/charts.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">RENDILEHT</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>about"><?php echo lang("KKK");?></a></li>
             <li><a href="<?php echo base_url(); ?>items"><?php echo lang("Renditavad_esemed");?></a></li>
             <li><a href="<?php echo base_url(); ?>categories"><?php echo lang("Kategooriad");?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(!$this->session->userdata('sisselogitud')) : ?>
            <li><a href="<?php echo base_url(); ?>kasutajad/sisselogimine"><?php echo lang("Logi_sisse");?></a></li>
            <li><a href="<?php echo base_url(); ?>users/register"><?php echo lang("Registreeru");?></a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('sisselogitud')) : ?>
            <li><a href="<?php echo base_url(); ?>users/account"><?php echo lang("Konto");?></a></li>
            <li><a href="<?php echo base_url(); ?>items/create"><?php echo lang("Lisa_kuulutus");?></a></li>
            <li><a href="<?php echo base_url(); ?>users/logout"><?php echo lang("Logi_välja");?></a></li>
          <?php endif; ?>
                      <li><select class="my" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
              <option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Eesti keel</option>
              <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
            </select></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
