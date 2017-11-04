<?
	require_once('includes/base.php');
	require_once('database/codigos.php');

	$cid = $_GET['id'];
	$vid = $_GET['vid'];
	
	$codigo = codigos::getcodigo($cid);

	$smarty->assign("codigo", $codigo);

	$smarty->display("vercodigo.tpl");

?>
