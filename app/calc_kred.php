<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['oprc'] = isset($_REQUEST['oprc']) ? $_REQUEST['oprc'] : null;	
        
}

function validate(&$form,&$infos,&$msgs){

	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['oprc']) ))	return false;	
	

	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty!';
	if ( $form['lata'] == "") $msgs [] = 'Nie podano liczby lat!';
	if ( $form['oprc'] == "") $msgs [] = 'Nie podano oprocentowania!';

	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Podana wartość w kwocie: "'.$form['kwota'].'" jest błędna!';
		if (! is_numeric( $form['lata'] )) $msgs [] = 'Podana wartość w latach: "'.$form['lata'].'" jest błędna!';
		if (! is_numeric( $form['oprc'] )) $msgs [] = 'Podana wartość w oprocentowaniu: "'.$form['oprc'].'" jest błędna!';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Wartości poprawne. Przeliczam ratę.';
	
	$form['kwota'] = floatval($form['kwota']);
	$form['lata'] = floatval($form['lata']);
	$form['oprc'] = floatval($form['oprc']);

	//wykonanie operacji
	//$result = ($kwota/($lata*12))+($kwota/($lata*12)*($oprc/100));
	
	
	$result =  $form['kwota'] / ($form['lata'] * 12 ) + ($form['kwota'] / ($form['lata'] * 12)) *  ($form['oprc'] / 100);
	$result = 'Miesięczna rata wynosi: '.round($result,2);
}

$form = null;
$infos = array();
$messages = array();
$result = null;

	
getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$result);
}

// SMARTY

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_header','Oto strona, na której wyliczysz swój kredyt!');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc_kred_view.tpl');
