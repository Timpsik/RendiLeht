<!DOCTYPE html>
<html lang="et">

<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/index.php/user_authentication/user_login_process");
}
?>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>"/>
	<script src="<?php echo base_url('assets/js/fb.js');?>"></script>
	<title>Sisse logimine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="See leht võimaldab inimestel asju rentida ja rendile anda.">
	<meta name="keywords" content="asjade rent">
  </head>

<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <label for="keel"><?php echo lang("Vali_keel");?></label>
			<select class="my-2" id="keel" onchange="javascript:window.location.href='<?php echo base_url();?>LanguageSwitcher/switchLang/'+this.value;">
				<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Estonian</option>
				<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
			</select>
        <div class="col-md-6">
          <button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>'"><?php echo lang("Tagasi");?></button>
        </div>
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
	  <?php echo form_open('user_authentication/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
      <div class="row">
        <div class="col-md-2 offset-md-2">
          <label for="logimeil" class=""><?php echo lang("E-mail");?>:</label>
        </div>
        <div class="col-md-4">
          <input id="logimeil" type="email" class="form-control" name="meil" placeholder=<?php echo lang("E-mail");?>> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2 offset-md-2">
          <label for="parool"class=""><?php echo lang("Parool");?>:</label>
        </div>
        <div class="col-md-4">
          <input  id="parool" type="password" class="form-control" name="parool" placeholder=<?php echo lang("Parool");?>> </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
		<input class="btn btn-primary" type="submit" value="<?php echo lang("Logi_sisse");?>" name="submit"/><br />
        </div>
        <div class="col-md-4"></div>
      </div>
	  <?php echo form_close(); ?>
      <div class="row">
        <div class="col-md-4"></div>
		<div class="fb-login-button"></div>
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