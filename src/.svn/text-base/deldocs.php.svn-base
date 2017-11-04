<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/documentos.php');
	
	$id=$_GET['id'];
	$version_id=$_GET['vid'];

	$ret = documentos::deldocumento($id);
	
	header("Location: verversao.php?id=" . $version_id . "&pid=" . $id);
?>
