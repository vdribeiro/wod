<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/elementos.php');

	$eid = $_GET['id'];
	$pid = $_GET['pid'];
	
	$elemento = elementos::getelemento($eid);
	$projecto = projectos::getproject($pid);

	$smarty->assign("elemento", $elemento);
	$smarty->assign("projecto", $projecto);

	$smarty->display("verelemento.tpl");

?>
