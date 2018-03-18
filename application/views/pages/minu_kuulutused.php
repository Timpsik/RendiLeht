<!DOCTYPE html>
<html>

<head>
<?php
if (!(isset($this->session->userdata['logged_in']))) {
header("location: http://localhost/index.php/user_authentication/user_login_process");
}
?>
<title>My Adverts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css');?>">
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
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10">
              <a class="btn btn-primary w-50" href="#"><?php echo lang("Broneeringud");?></a>
            </div>
          </div>
          <div class="row">

            <div class="col-md-10">
              <a class="btn btn-primary my-2 w-50" href="#"><?php echo lang("Ajalugu");?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 w-75">
              <a class="btn btn-primary my-2" href="#"><?php echo lang("Minu_kuulutused");?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 ">
              <a class="btn btn-primary my-2 w-50" href="#"><?php echo lang("Lisa_kuulutus");?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <a class="btn btn-primary my-2 w-75" href="#"><?php echo lang("Minu_andmed");?></a>
            </div>
          </div>
        </div>
        <div class="col-md-5 ">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                 </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12" style="transition: all 0.25s;">
                    <h4 class="">Jalgrattas</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="">Tartumaa</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3">
                    <h6 class="my-1">Tund</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">Päev</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">Nädal</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">Kuu</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <h6 class="my-1">10</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">100</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">500</h6>
                  </div>
                  <div class="col-md-3">
                    <h6 class="my-1">1000
                      <br> </h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <a class="btn btn-primary my-2" href="#"><?php echo lang("Lisainfo");?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3   offset-md-1">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12" style="transition: all 0.25s;"></div>
                </div>
                <div class="row"></div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12"></div>
                </div>
                <div class="row">
                  <div class="col-md-12"></div>
				  		  <?php foreach ($kuulutus as $kuulutus_data): ?>

        <h3><?php echo $kuulutus_data['user_mail']; ?></h3>
        <div class="main">
		<h3>   <?php echo "Emaili kuulutusi:" ?></h3>
             <h3>   <?php echo $kuulutus_data['kuulutusi']; ?></h3>
        </div>

<?php endforeach; ?>
                </div>
                <div class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>