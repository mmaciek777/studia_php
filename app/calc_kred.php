<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// Pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$lat = $_REQUEST ['lat'];
$oprc = $_REQUEST ['oprc'];

// Sprawdzenie, czy parametry zostały przekazane
if ( !(isset($kwota) && isset($lat) && isset($oprc))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty!';
}
if ( $lat == "") {
	$messages [] = 'Nie podano ilosci lat!';
}
if ( $oprc == "") {
	$messages [] = 'Nie podano oprocentowania!';
}


if (empty( $messages )) {
	
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Podana kwota nie jest liczbą całkowitą!';
	}
	
	if (! is_numeric( $lat )) {
		$messages [] = 'Ilosc lat nie jest liczbą całkowitą!';
	}

	if (! is_numeric( $oprc )) {
		$messages [] = 'Oprocentowanie nie jest poprawne!';
	}	

}

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja na int
	$kwota = floatval($kwota);
	$lat = intval($lat);
	$oprc = floatval($oprc);

	//wykonanie obliczeń
	$msc_rata = ($kwota/($lat*12))+($kwota/($lat*12)*($oprc/100));
	$msc_rata = round($msc_rata,2);
}
	
//   Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$lat,$oprc,$msc_rata)

include 'calc_kred_view.php';