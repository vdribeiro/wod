<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/tarefas.php');
	
	$id=$_GET['id'];
	$version_id=$_GET['vid'];

	$ret = tarefas::deltarefa($id);
	
	header("Location: verversao.php?id=" . $version_id . "&pid=" . $id);
?>
