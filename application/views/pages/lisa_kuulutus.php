<!DOCTYPE html>
<html>

<head>
<?php
if (!(isset($this->session->userdata['logged_in']))) {
header("location: http://localhost/index.php/user_authentication/user_login_process");
}
?>
    <title>Add Advert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css');?>">
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
			</div>
        <div class="col-md-6">
          <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>"><?php echo lang("Tagasi");?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary w-100" href="#" id="broneeringud_nupp"><?php echo lang("Broneeringud");?></a>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary w-100 my-2" href="#" id="ajalugu_nupp"><?php echo lang("Ajalugu");?></a>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary my-2 w-100" href='<?php echo base_url('Pages/Minu_kuulutused');?>' id="minukuulutused_nupp"><?php echo lang("Minu_kuulutused");?></a>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary my-2 w-100" href="#" id="lisakuulutus_nupp"><?php echo lang("Lisa_kuulutus");?></a>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary my-2 w-100" href="#" id="minu_andmed_nupp"><?php echo lang("Minu_andmed");?></a>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
          </div>
		<?php
			if (isset($error_message)) {
				echo $error_message;
			}
			echo validation_errors();
		?>
        </div>
        <div class="col-md-4">
            <?php echo form_open_multipart('upload/fail');?>
          <h3 class=""><?php echo lang("Pealkiri");?>:</h3>
          <input type="text" class="form-control" name="Pealkiri">
          <h3 class=""><?php echo lang("Kirjeldus");?>:</h3> 
		  <textarea class="form-control" rows="3" id="comment" name="Kirjeldus"></textarea>
          <div class="row">
            <div class="col-md-12">
              <h3 class=""><?php echo lang("Telefoni_number");?>:</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="telefon" name="Telefon"> </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class=""><?php echo lang("Hind");?>:</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h5 class="text-right"><?php echo lang("Tund");?>:</h5>
            </div>
            <div class="col-md-6">
              <input type="number" class="form-control w-75" name="Tund"> </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h5 class="text-right"><?php echo lang("Päev");?>:</h5>
            </div>
            <div class="col-md-6">
              <input type="number" class="form-control w-75" name="Päev"> </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h5 class="text-right"><?php echo lang("Nädal");?></h5>
            </div>
            <div class="col-md-6">
              <input type="number" class="form-control w-75" name="Nädal"> </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h5 class="text-right"><?php echo lang("Kuu");?>:</h5>
            </div>
            <div class="col-md-6">
              <input type="number" class="form-control w-75" name="Kuu"> </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3 class="my-2"><?php echo lang("Lisa_pilt");?>:</h3>
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input class="btn btn-primary" type="submit" value="<?php echo lang("Salvesta");?>" name="submit"/><br />
            </div>
          </div>
          <?php echo form_close();?>
        </div>
        
        <div class="row">
          <div class="col-md-6"> </div>
          <div class="col-md-6"> </div>
        </div>
        <div class="row">
          <div class="col-md-6"> </div>
          <div class="col-md-6"> </div>
        </div>
        <div class="row">
          <div class="col-md-12"> </div>
        </div>
        <div class="row">
          <div class="col-md-6"> </div>
          <div class="col-md-6"> </div>
        </div>
        <div class="row">
          <div class="col-md-7 offset-md-5"> </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</html>