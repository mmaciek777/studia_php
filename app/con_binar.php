<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


function getParams(&$form){
	$form['binarny'] = isset($_REQUEST['binarny']) ? $_REQUEST['binarny'] : null;
	
}

function validate(&$form,&$infos,&$msgs){

	if ( ! (isset($form['binarny'])))	return false;	
	

	$infos [] = 'Przekazano liczbę.';

	if ( $form['binarny'] == "") $msgs [] = 'Nie podano liczby!';
	

	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['binarny'] )) $msgs [] = 'Podana wartość: "'.$form['binarny'].'" jest błędna!';
		
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Wartość poprawna. Konwertuję liczbę.';
	
	
	$result = decbin(( $form['binarny'] ));
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
$smarty->assign('page_title','Konwenter');
$smarty->assign('page_header','Oto strona, na której przekonwertujesz swoją liczbę!');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/con_binar_view.tpl');