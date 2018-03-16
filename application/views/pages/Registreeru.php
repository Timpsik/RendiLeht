<!DOCTYPE html>
<html lang="et">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Registreeri, et asju rentida">

      <meta name="keywords" content="asjade rentimine">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>">
  <script type='text/javascript' src="<?php echo base_url('assets/js/fb.js');?>"></script>
  <title>Registreeri</title>
  
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('pages/regamine'); ?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
			<select class="my-2" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
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
      <div class="row">
        <div class="col-md-4">
          <h3 class="" ><?php echo lang("Eesnimi");?>:</h3>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder=<?php echo lang("Eesnimi");?> name="eesnimi"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3 class="" ><?php echo lang("Perenimi");?>:</h3>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder=<?php echo lang("Perenimi");?> name="perenimi"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3 class="" ><?php echo lang("E-mail");?>:
            <br> </h3>
        </div>
        <div class="col-md-4">
          <input type="email" class="form-control" placeholder="Email" name="email"> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3 class="" ><?php echo lang("Parool");?>:</h3>
        </div>
        <div class="col-md-4">
          <input type="password" class="form-control" placeholder=<?php echo lang("Parool");?> name="parool"> </div>
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
      <div class="row">
        <div class="col-md-4"></div>
		<fb:login-button id="fb"
			scope="public_profile,email"
			onlogin="checkLoginState();">
		</fb:login-button>
        <div class="col-md-4"></div>
		
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
 </form>
</body>

</html>