  <div class="row">
    <div class="col-md-20">
      <e><h1 class="text-center"><?php echo lang("Rendi_kõike");?></h1><br><br>
    </div>
  </div>

<div>
<form class="form-horizontal">
  <fieldset>

          <div class="col-lg-12">
        <input class="form-control" id="inputEmail" placeholder="<?php echo lang("Sisesta_märksõna");?>" type="text">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?php echo lang("Kategooria");?></label>
      <div class="col-lg-10">
         <select class="form-control" id="select">
        <option value="Kõik"><?php echo lang("Kõik");?></option>
        <option value="Elektroonika"><?php echo lang("Elektroonika");?></option>
        <option value="Mängud"><?php echo lang("Mängud");?></option>
        <option value="Spordivahendid"><?php echo lang("Spordivahendid");?></option>
        <option value="Riided"><?php echo lang("Riided");?></option>
        </select>
        <br>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?php echo lang("Asukoht");?></label>
      <div class="col-lg-10">
         <select class="form-control" id="select">
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
        </select>
        <br>
      </div>
    </div>

     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?php echo lang("Algkuupäev");?></label>
      <div class="col-lg-2">
         <input type="date" class="form-control" id="alg">
        <br>
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><?php echo lang("Lõppkuupäev");?></label>
      <div class="col-lg-2">
         <input type="date" class="form-control" id="alg">
        <br>
      </div>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block"><?php echo lang("Otsi");?></button>
    </div>

    <div class="form-group">