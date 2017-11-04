<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/tarefas.php');
	
	$task_id = $_GET['id'];
	$version_id = $_GET['vid'];
	$project_id = $_GET['pid'];
	
	$smarty->assign("task_id", $task_id);
	$smarty->assign("version_id", $version_id);
	$smarty->assign("project_id", $project_id);
	$smarty->display("editatarefaform.tpl");
	
?>
