<?php
require_once dirname(__FILE__).'/../config.php';



include _ROOT_PATH.'/app/security/check.php';

function getParams(&$binarna){
	$binarna = isset($_REQUEST['binarna']) ? $_REQUEST['binarna'] : null;	
}
function validate(&$binarna,&$messages){
	
	if ( ! (isset($binarna))) {
		return false;
	}


if ( $binarna == "") {
	$messages [] = 'Nie podano liczby!';
}

	if (count ( $messages ) != 0) return false;
	
	
	if (! is_numeric( $binarna )) {
		$messages [] = 'Wartość nie jest liczbą całkowitą';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}
	function process(&$binarna,&$messages,&$skonwertowane){
	global $role;
	
	
	$binarna = intval($binarna);
	
	
			if ( $role == 'user' && $binarna > 128){
				$messages [] = 'Nie masz uprawnień, aby przekonwertować liczbę powyżej 128!';
				
			} else {
				$skonwertowane = decbin($binarna);
			}
		
	}

$binarna = null;
$skonwertowane = null;
$messages = array();

getParams($binarna);
if ( validate($binarna,$messages) ) { 
	process($binarna,$messages,$skonwertowane);
}	

include 'con_binar_view.php';