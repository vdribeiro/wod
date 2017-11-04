<?
	require_once('includes/base.php');
	require_once('database/seccoes.php');
	
	$seccoes = seccoes::getAll();
	
	$smarty->assign("seccoes", $seccoes);
	
	$smarty->display("listarseccoes.tpl");
?>