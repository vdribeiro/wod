<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	
	$pid = $_POST['name'];
	$trab = $_POST['trab'];
	$sal = $_POST['sal'];
	
	$ret = projectos::candidataproject($s_username, $pid, $trab, $sal);
	
	header("Location: verprojecto.php?id=" . $pid);
	
?>
