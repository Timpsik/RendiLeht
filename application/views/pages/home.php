<!DOCTYPE html>
<html lang="et">
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>"/>
  <title>Esemete rent Eestis</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width">

       <meta name="description" content="See leht võimaldab inimestel asju rentida ja rendile anda.">

       <meta name="keywords" content="asjade rent">
</head>
<body>
		<button id="b01" onclick="location.href='<?php echo site_url('Pages/lisa_kuulutus');?>'">Lisa kuulutus</button>
		<button id="b02" onclick="location.href='<?php echo site_url('Pages/logimine');?>'">Logi sisse</button>
		<button id="b03" onclick="location.href='<?php echo site_url('Pages/regamine');?>'">Registreeru</button>
		<h1>RENDI KÕIKE</h1>
		<form action="/action_page.php">
			<p id="valikategooria">Vali kategooria:	</p>
			<p id="valikoht">Vali asukoht:	</p>
			<select id="kategooria" name="kategooria">
				<option value="Kõik">Kõik</option>
				<option value="Elektroonika">Elektroonika</option>
				<option value="Mängud">Mängud</option>
				<option value="Spordivahendid">Spordivahendid</option>
				<option value="Riided">Riided</option>
			</select>
			<select id="asukoht" name="asukoht">
				<option value="Kõik">Kõik</option>
				<option value="Harjumaa">Harjumaa</option>
				<option value="Tartumaa">Tartumaa</option>
				<option value="Valgamaa">Valgamaa</option>
				<option value="Pärnumaa">Pärnumaa</option>
			</select>
			<br><br>
			<p id="valialgus">Vali alguskuupäev:	</p>
			<p id="valilõpp">Vali lõppkuupäev:	</p>
			<input id="algus" type="date" name="Alguspäev">
			<input id="lõpp" type="date" name="Lõpupäev">
			<br><br>
			<p id="otsinglabel">Sisesta otsingusõna:	</p>
			<input id="otsing" type="text" name="otsingusõna" size="45">
			<br><br>
			<input id="submit" type="submit">
			</form>
			<h2 id="topkuulutused">Top 10 Kuulutused:</h2>
			<h2 id="kategooriad">Kategooriad:</h2>
			
</body>
</html>