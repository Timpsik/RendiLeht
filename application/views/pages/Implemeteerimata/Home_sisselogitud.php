<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="&lt;?php echo base_url('assets/css/theme.css')?&gt;">
  <link rel="stylesheet" href="theme.css">
</head>
<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2"><select id="kategooria" name="kategooria" class="my-2">
				<option value="Estonian">Estonian</option>
				<option value="English">English</option>   
			</select></div>
        <div class="col-md-2">
          <a class="btn btn-primary" href="#">Minu töölaud</a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <a class="btn btn-primary" href="#">Logi välja</a>
        </div>
        <div class="col-md-2 ">
          <a class="btn btn-primary" href="#">Lisa kuulutus</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h1 class="display-3">Rendi kõike</h1>
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
            <h4 class="" contenteditable="true">Kategooria</h4>
          </div>
        </div>
        <div class="col-md-2"><select id="kategooria" name="kategooria">
				<option value="Kõik">Kõik</option>
				<option value="Elektroonika">Elektroonika</option>
				<option value="Mängud">Mängud</option>
				<option value="Spordivahendid">Spordivahendid</option>
				<option value="Riided">Riided</option>
			</select></div>
        <div class="col-md-2">
          <div class="col-md-12">
            <h4 class="">Asukoht</h4>
          </div>
        </div>
        <div class="col-md-2"><select id="kategooria" name="kategooria">
				<option value="Kõik">Kõik</option>
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
          <h4 class="">Algkuupäev
            <br> </h4>
        </div>
        <div class="col-md-2">
          <input type="date" class="form-control"> </div>
        <div class="col-md-2">
          <h4 class="">Lõppkuupäev &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <br> </h4>
        </div>
        <div class="col-md-2">
          <input type="date" class="form-control"> </div>
      </div>
      <div class="row w-75">
        <div class="col-md-8 offset-md-4">
          <input type="text" class="form-control" placeholder="Sisesta märksõna"> </div>
      </div>
      <div class="row">
        <div class="col-md-7 offset-md-5">
          <a class="btn btn-primary w-25 my-2" href="#">Otsi</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Top kuulutused</h1>
        </div>
      </div>
    </div>
  </div>
</html>