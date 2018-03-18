<!DOCTYPE html>
<html lang="et">

<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>"/>
  <title>Sisse Logitud</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Oled sisse loginud, et asju rentida">

      <meta name="keywords" content="asjade rentimine">
</head>

<body>

<h1>Said sisse</h1>

<?php foreach ($person as $person_data): ?>

        <h3><?php echo $person_data['Eesnimi']; ?></h3>
        <div class="main">
                <?php echo $person_data['Perenimi']; ?>
        </div>

<?php endforeach; ?>

</body>
</html>