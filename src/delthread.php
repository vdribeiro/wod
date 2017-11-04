<?
	require_once('includes/base.php');
	require_once('database/threads.php');
	
	$tid=$_GET['id'];
	
	$stid=$_GET['sid'];

	$ret = threads::delthread($tid);
	
	header("Location: verseccao.php?id=" . $stid);
?>
