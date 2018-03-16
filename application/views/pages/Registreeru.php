<!DOCTYPE html>
<html lang="et">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Registreeri, et asju rentida">

      <meta name="keywords" content="asjade rentimine">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>">
  <title>Registreeri</title>
</head>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1933669939985923',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });
      
    FB.AppEvents.logPageView();   
      
  };
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});



</script>
<body>
<select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
	<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Estonian</option>
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    
</select>
<?php echo validation_errors(); ?>

<?php echo form_open('pages/regamine'); ?>

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
          <h3 class="" >Email:
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
          
		  <input id="registreeri" type="submit" name="Registreeri" value=<?php echo lang("Registreeri");?> />
        </div>
        <div class="col-md-2">
          <input id="registreeri" type="submit" name="RegistreeriIDkaardiga" value="<?php echo lang("RegistreeriID");?>" />
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