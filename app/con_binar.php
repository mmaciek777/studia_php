<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// Pobranie parametrów

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$binarna){
	$binarna = isset($_REQUEST['binarna']) ? $_REQUEST['binarna'] : null;	
}
function validate(&$binarna,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($binarna))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $binarna == "") {
	$messages [] = 'Nie podano liczby!';
}
//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $binarna )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}
	function process(&$binarna,&$messages,&$skonwertowane){
	global $role;
	
	//konwersja parametrów na int
	$binarna = intval($binarna);
	
	//wykonanie operacji
			if ( $role == 'user' && $binarna > 128){
				$messages [] = 'Nie masz uprawnień, aby przekonwertować liczbę powyżej 128!';
				
			} else {
				$skonwertowane = decbin($binarna);
			}
		
	}
//definicja zmiennych kontrolera
$binarna = null;
$skonwertowane = null;
$messages = array();

getParams($binarna);
if ( validate($binarna,$messages) ) { // gdy brak błędów
	process($binarna,$messages,$skonwertowane);
}	
//   Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$binarna,$lat,$oprc,$skonwertowane)

include 'con_binar_view.php';