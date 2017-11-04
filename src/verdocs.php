<?
	require_once('includes/base.php');
	require_once('database/documentos.php');

	$did = $_GET['id'];
	$vid = $_GET['vid'];
	
	$documento = documentos::getdocumento($did);

	$smarty->assign("documento", $documento);

	$smarty->display("verdocumento.tpl");

?>
