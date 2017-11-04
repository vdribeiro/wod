<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/codigos.php');
	
	$code_id = $_GET['id'];
	$version_id = $_GET['vid'];
	$project_id = $_GET['pid'];
	
	$smarty->assign("code_id", $code_id);
	$smarty->assign("version_id", $version_id);
	$smarty->assign("project_id", $project_id);
	$smarty->display("editacodigoform.tpl");
	
?>
