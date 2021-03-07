<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';


function getParams(&$kwota,&$lat,&$oprc){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$oprc = isset($_REQUEST['oprc']) ? $_REQUEST['oprc'] : null;	
}
function validate(&$kwota,&$lat,&$oprc,&$messages){
	
	if ( ! (isset($kwota) && isset($lat) && isset($oprc))) {
		
		return false;
	}


if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty!';
}
if ( $lat == "") {
	$messages [] = 'Nie podano ilosci lat!';
}
if ( $oprc == "") {
	$messages [] = 'Nie podano oprocentowania!';
}

	if (count ( $messages ) != 0) return false;
	
	
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
	
	$kwota = intval($kwota);
	$lat = intval($lat);
	$oprc = intval($oprc);
	
			if ( $role == 'user' && $kwota > 10000){
				$messages [] = 'Nie masz uprawnień, aby operować na kwotach powyżej 10000zł!';
				
			} else {
				$msc_rata = ($kwota/($lat*12))+($kwota/($lat*12)*($oprc/100));
				$msc_rata = round($msc_rata,2);
			}
		
	}

$kwota = null;
$lat = null;
$oprc = null;
$msc_rata = null;
$messages = array();

getParams($kwota,$lat,$oprc);
if ( validate($kwota,$lat,$oprc,$messages) ) { // gdy brak błędów
	process($kwota,$lat,$oprc,$messages,$msc_rata);
}	


include 'calc_kred_view.php';