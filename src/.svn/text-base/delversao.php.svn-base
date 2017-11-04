<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	
	$vid=$_GET['id'];
	
	$pid=$_GET['pid'];

	$ret = versoes::delversion($vid);
	
	header("Location: verprojecto.php?id=" . $pid);
?>
