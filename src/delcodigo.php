<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/codigos.php');
	
	$id=$_GET['id'];
	$version_id=$_GET['vid'];

	$ret = codigos::delcodigo($id);
	
	header("Location: verversao.php?id=" . $version_id . "&pid=" . $id);
?>
