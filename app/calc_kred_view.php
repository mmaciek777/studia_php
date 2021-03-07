<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/con_binar.php" class="pure-button">Konwerter binarny</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>


<div style="width:90%; margin: 2em auto;">

<h2>Kalkulator kredytowy</h2>
<form action="<?php print(_APP_ROOT);?>/app/calc_kred.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_x">Podaj kwotę: </label><br/>
	<input id="id_kwota" type="text" name="kwota" value="<?php out($kwota) ?>" /><br/>
	<label for="id_y">Podaj ile lat: </label><br/>
	<input id="id_lat" type="text" name="lat" value="<?php out($lat) ?>" /><br/>
	<label for="id_z">Podaj oprocentowanie: </label><br/>
	<input id="id_oprc" type="text" name="oprc" value="<?php out($oprc) ?>" /><br/><br/>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
	}
?>

<?php if (isset($msc_rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesieczna rata wynosi: '.$msc_rata.' zl'; ?></br>
<?php echo 'Za cały kredyt zapłacisz: '.$msc_rata*($lat*12).' zl'; ?>
</div>
<?php } ?>

</div>
</body>
</html>