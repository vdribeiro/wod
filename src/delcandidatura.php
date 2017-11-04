<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	
	$did=$_GET['did'];
	$pid=$_GET['pid'];

	$ret = projectos::delcandidatura($did,$pid);
	
	header("Location: verprojecto.php?id=" . $pid);
?>
