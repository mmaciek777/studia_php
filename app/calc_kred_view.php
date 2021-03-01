<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_kred.php" method="get">
	<label for="id_x">Podaj kwotę: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if(isset($kwota)) print($kwota); ?>" /><br/>
	<label for="id_y">Podaj ile lat: </label>
	<input id="id_lat" type="text" name="lat" value="<?php if(isset($lat)) print($lat); ?>" /><br/>
	<label for="id_z">Podaj oprocentowanie: </label>
	<input id="id_oprc" type="text" name="oprc" value="<?php if(isset($oprc)) print($oprc); ?>" /><br/>
	<input type="submit" value="Oblicz" />
</form>	

<?php
//test
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
?>

<?php if (isset($msc_przyb)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesieczna rata wynosi: '.$msc_przyb.' zl'; ?>
</div>
<?php } ?>

</body>
</html>