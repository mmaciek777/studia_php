<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
<title>Konwerter </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/calc_kred.php" class="pure-button">Kalkulator kredytowy</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>


<div style="width:90%; margin: 2em auto;">

<h2>Konwerter binarny</h2>
<form action="<?php print(_APP_ROOT);?>/app/con_binar.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_x">Podaj liczbę w systemie dziesiętnym: </label><br/>
	<input id="id_kwota" type="text" name="binarna" value="<?php out($binarna) ?>" /><br/>
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

<?php if (isset($skonwertowane)){ ?>
<div style="margin-left: 0px;margin-top: 2em; padding: 20px; border-radius: 10px; background: rgba(0, 128, 0, 0.3); width:250px;">
<?php echo 'System dwójkowy: '.$skonwertowane ; ?></br>
</div>
<?php } ?>

</div>
</body>
</html>