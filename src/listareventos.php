<?
	require_once('includes/base.php');
	require_once('database/eventos.php');

	$eventos = Eventos::getAll();

	$smarty->assign("eventos", $eventos);

	$smarty->display('listareventos.tpl');

?>
