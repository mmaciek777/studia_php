<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// Pobranie parametrów

//$kwota = $_REQUEST ['kwota'];
//$lat = $_REQUEST ['lat'];
//$oprc = $_REQUEST ['oprc'];

include _ROOT_PATH.'/app/security/check.php';

// Sprawdzenie, czy parametry zostały przekazane
 /*if ( !(isset($kwota) && isset($lat) && isset($oprc))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}
*/
function getParams(&$kwota,&$lat,&$oprc){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$oprc = isset($_REQUEST['oprc']) ? $_REQUEST['oprc'] : null;	
}
function validate(&$kwota,&$lat,&$oprc,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lat) && isset($oprc))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
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
//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $lat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $oprc)) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}
	function process(&$kwota,&$lat,&$oprc,&$messages,&$msc_rata){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$lat = intval($lat);
	$oprc = intval($oprc);
	
	//wykonanie operacji
			if ( $role == 'user' && $kwota > 10000){
				$messages [] = 'Nie masz uprawnień, aby operować na kwotach powyżej 10000zł!';
				
			} else {
				$msc_rata = ($kwota/($lat*12))+($kwota/($lat*12)*($oprc/100));
				$msc_rata = round($msc_rata,2);
			}
		
	}
//definicja zmiennych kontrolera
$kwota = null;
$lat = null;
$oprc = null;
$msc_rata = null;
$messages = array();

getParams($kwota,$lat,$oprc);
if ( validate($kwota,$lat,$oprc,$messages) ) { // gdy brak błędów
	process($kwota,$lat,$oprc,$messages,$msc_rata);
}	
//   Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$lat,$oprc,$msc_rata)

include 'calc_kred_view.php';