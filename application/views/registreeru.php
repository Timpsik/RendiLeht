<!DOCTYPE html>
<html lang="et">
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/index.php/user_authentication/user_login_process");
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Registreeri, et asju rentida">

      <meta name="keywords" content="asjade rentimine">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>">
  <script src="<?php echo base_url('assets/js/fb.js');?>"></script>
  <title>Registreeri</title>
  
</head>
<body>
<?php  
		echo "<div class='error_msg'>";
			if (isset($message_display)) {
		echo $message_display;}
		echo "</div>";
		?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <label for="keel"><?php echo lang("Vali_keel");?></label>
			<select class="my-2" id="keel" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
				<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Estonian</option>
				<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
			</select></div>
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
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h1 class=""><?php echo lang("Registreeri");?></h1>
        </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <?php echo validation_errors(); ?>
					<?php echo form_open('user_authentication/new_user_registration');?>
      <div class="row">
        <div class="col-md-4">
          <label for="eesnimi" class="" ><?php echo lang("Eesnimi");?>:</label>
        </div>
        <div class="col-md-4">
          <input type="text" id="eesnimi" class="form-control" placeholder=<?php echo lang("Eesnimi");?> name="eesnimi"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="perenimi" class="" ><?php echo lang("Perenimi");?>:</label>
        </div>
        <div class="col-md-4">
          <input type="text" id="perenimi" class="form-control" placeholder=<?php echo lang("Perenimi");?> name="perenimi"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="meil" class="" ><?php echo lang("E-mail");?>:
            <br> </label>
        </div>
        <div class="col-md-4">
          <input type="email" id="meil" class="form-control" placeholder=<?php echo lang("E-mail");?> name="email"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="parool" class="" ><?php echo lang("Parool");?>:</label>
        </div>
        <div class="col-md-4">
          <input type="password" id="parool" class="form-control" placeholder=<?php echo lang("Parool");?> name="parool"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          
		  <input class="btn btn-primary" type="submit" name="Registreeri" value=<?php echo lang("Registreeri");?> />
        </div>
        
        <div class="col-md-2">
            
          <input class="btn btn-primary" type="submit" name="RegistreeriIDkaardiga" value="<?php echo lang("RegistreeriID");?>" />
        </div>
        <div class="col-md-2"></div>
      </div>
      <?php echo form_close();?>
      <div class="row">
        <div class="col-md-4"></div>
		<div class="fb-login-button"></div>
        <div class="col-md-4"></div>
		
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</body>
</html>