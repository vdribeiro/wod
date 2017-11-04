<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/versoes.php');
	require_once('database/tarefas.php');
	require_once('database/codigos.php');
	require_once('database/documentos.php');

	$vid = $_GET['id'];
	$pid = $_GET['pid'];

	$versao = versoes::getversion($vid);
	$projecto = projectos::getproject($pid);
	
	$tasks = tarefas::getbyProject($vid);
	$codes = codigos::getbyProject($vid);
	$docs = documentos::getbyProject($vid);
	
	$smarty->assign("versao", $versao);
	$smarty->assign("projecto", $projecto);
	$smarty->assign("tasks", $tasks);
	$smarty->assign("codes", $codes);
	$smarty->assign("docs", $docs);

	$smarty->display("verversao.tpl");

?>
