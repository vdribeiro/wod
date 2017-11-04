<?
	require_once('includes/base.php');
	require_once('database/posts.php');
	
	$pid=$_GET['id'];
	
	$tid=$_GET['tid'];

	$ret = posts::delpost($pid);
	
	header("Location: verthread.php?id=" . $tid);
?>
