<?php echo form_open('kasutajad/seaded');?>
<?php echo validation_errors(); ?>
  <div class="row">

    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo lang("Muuda_andmeid");?></h1>

      <div class="form-group">
        <label for="eesnimi"><?php echo lang("Eesnimi");?></label>
        <input id="eesnimi" type="text" class="form-control" name="eesnimi" value=<?php echo $konto['eesnimi'];?>
      </div>

      <div class="form-group">
        <label for="perenimi"><?php echo lang("Perenimi");?></label>
        <input id="perenimi" type="text" class="form-control" name="perenimi" value=<?php echo $konto['perenimi'];?>
      </div>

      <div class="form-group">
        <label for="email"><?php echo lang("Email");?></label>
        <input id="email" type="email" class="form-control" name="email" value=<?php echo $konto['email'];?>
      </div>

      <div class="form-group">
        <label for="telefon"><?php echo lang("Telefoni_number");?></label>
        <input id="telefon" type="tel" class="form-control" name="telefon" value=<?php echo $konto['telefon'];?>
      </div>

      <div class="form-group">
        <label for="parool"><?php echo lang("Uus_parool");?></label>
        <input id="parool" type="password" class="form-control" name="parool" placeholder=<?php echo lang("Parool");?>>
      </div>

      <div class="form-group">
        <label for="parool2"><?php echo lang("Kinnita_parool");?></label>
        <input id="parool2" type="password" class="form-control" name="parool2" placeholder=<?php echo lang("Parool");?>>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block"><?php echo lang("Muuda_andmeid");?></button>
    </div>
    <?php echo form_close(); ?>
    <a href="<?php echo base_url(); ?>kasutajad/kustuta"><?php echo lang("Kustuta_kasutaja");?></a>
  </div>

