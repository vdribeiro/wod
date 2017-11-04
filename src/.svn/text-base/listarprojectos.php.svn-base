<?
	require_once('includes/base.php');
	require_once('database/projectos.php');

	$projectos = projectos::getAll();

	$smarty->assign("projectos", $projectos);

	$smarty->display('listarprojectos.tpl');

?>
