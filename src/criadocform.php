<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/documentos.php');
	
	$version_id = $_GET['vid'];
	$project_id = $_GET['pid'];
	
	print $version_id;
	print $project_id;
	
	$smarty->assign("version_id", $version_id);
	$smarty->assign("project_id", $project_id);
	$smarty->display("criadocform.tpl");
	
?>
