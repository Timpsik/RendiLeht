<!DOCTYPE html>
<html>

<head>
    <title>Homepage Signed in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css');?>">
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
			<select class="my-2" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
				<option value="estonian" <?php if($this->session->userdata('site_lang') == 'estonian') echo 'selected="selected"'; ?>>Estonian</option>
				<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
			</select>
		</div>
        <div class="col-md-2">
          <a class="btn btn-primary" href="#"><?php echo lang("Minu_töölaud");?></a>
		  
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
		<button class="btn btn-primary" onclick="location.href='<?php echo base_url('User_authentication/logout');?>'"><?php echo lang("Logi_välja");?></button>
			</div>
        <div class="col-md-2 ">
          <a class="btn btn-primary" href="<?php echo base_url('upload/fail');?>"><?php echo lang("Lisa_kuulutus");?></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h1 class="display-3"><?php echo lang("Rendi_kõike");?></h1>
                </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="col-md-12">
            <h4 class=""><?php echo lang("Kategooria");?></h4>
          </div>
        </div>
        <div class="col-md-2"><select id="kategooria" name="kategooria">
				<option value="Kõik"><?php echo lang("Kõik");?></option>
				<option value="Elektroonika"><?php echo lang("Elektroonika");?></option>
				<option value="Mängud"><?php echo lang("Mängud");?></option>
				<option value="Spordivahendid"><?php echo lang("Spordivahendid");?></option>
				<option value="Riided"><?php echo lang("Riided");?></option>
			</select></div>
        <div class="col-md-2">
          <div class="col-md-12">
            <h4 class=""><?php echo lang("Asukoht");?></h4>
          </div>
        </div>
        <div class="col-md-2"><select id="asukoht" name="asukoht">
				<option value="Kõik"><?php echo lang("Kõik");?></option>
				<option value="Harjumaa">Harjumaa</option>
				<option value="Tartumaa">Tartumaa</option>
				<option value="Ida-virumaa">Ida-Virumaa</option>
				<option value="Lääne-Virumaa">Lääne-Virumaa</option>
        <option value="Viljandimaa">Viljandimaa</option>
        <option value="Raplamaa">Raplamaa</option>
        <option value="Võrumaa">Võrumaa</option>
        <option value="Saaremaa">Saaremaa</option>
        <option value="Jõgevamaa">Jõgevamaa</option>
        <option value="Järvamaa">Järvamaa</option> 
        <option value="Valgamaa">Valgamaa</option>
        <option value="Põlvamaa">Põlvamaa</option>
        <option value="Läänemaa">Läänemaa</option>
        <option value="Hiiumaa">Hiiumaa</option>   
			</select></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="col-md-12"></div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="col-md-12"></div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <h4 class=""><?php echo lang("Algkuupäev");?>
            <br> </h4>
        </div>
        <div class="col-md-2">
          <input type="date" class="form-control"> </div>
        <div class="col-md-2">
          <h4 class=""><?php echo lang("Lõppkuupäev");?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <br> </h4>
        </div>
        <div class="col-md-2">
          <input type="date" class="form-control"> </div>
      </div>
      <div class="row w-75">
        <div class="col-md-8 offset-md-4">
          <input type="text" class="form-control" placeholder="<?php echo lang("Sisesta_märksõna");?>"> </div>
      </div>
      <div class="row">
        <div class="col-md-7 offset-md-5">
          <a class="btn btn-primary w-25 my-2" href="#"><?php echo lang("Otsi");?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class=""><?php echo lang("Top_kuulutused");?></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-4"></div>
      </div>
    </div>
  </div>
</body>
</html>