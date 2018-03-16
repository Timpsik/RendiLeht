<!DOCTYPE html>
<html lang="et">
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>"/>
	<script type='text/javascript' src="<?php echo base_url('assets/js/fb.js');?>"></script>
	<title>Sisse logimine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="See leht võimaldab inimestel asju rentida ja rendile anda.">
	<meta name="keywords" content="asjade rent">
  </head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
			<select class="my-2" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
				<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Estonian</option>
				<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
			</select>
        <div class="col-md-6">
          <button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>'"><?php echo lang("Tagasi");?></button>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2 offset-md-2">
          <h3 class=""><?php echo lang("E-mail");?></h3>
        </div>
        <div class="col-md-4">
          <input type="email" class="form-control" placeholder=<?php echo lang("E-mail");?>> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2 offset-md-2">
          <h3 class=""><?php echo lang("Parool");?>:</h3>
        </div>
        <div class="col-md-4">
          <input type="password" class="form-control" placeholder=<?php echo lang("Parool");?>> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-primary" href="Home_sisselogitud.html"><?php echo lang("L");?>
            <br> </a>
        </div>
        <div class="col-md-4"></div>
		<fb:login-button id="fb"
			scope="public_profile,email"
			onlogin="checkLoginState();">
		</fb:login-button>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</html>