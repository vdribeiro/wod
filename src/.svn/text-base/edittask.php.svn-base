<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/tarefas.php');
	require_once('database/elementos.php');
	
	$task_id = $_GET['id'];
	$version_id = $_GET['vid'];
	$project_id = $_GET['pid'];
	$name = $_POST['nome'];
	$details = $_POST['det'];
	$priority = $_POST['pri'];
	
	$ret = tarefas::edittarefa($task_id, $name, $details, $priority);
	
	header("Location: verversao.php?id=" . $version_id . "&pid=" . $project_id);
?>
