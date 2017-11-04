<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	
	$utilizadores = Utilizadores::getAll();

	$smarty->assign("utilizadores", $utilizadores);

	$smarty->display('listarutilizadores.tpl');

?>
