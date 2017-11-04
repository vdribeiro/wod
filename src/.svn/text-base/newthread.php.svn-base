<?
	require_once('includes/base.php');
	require_once('database/threads.php');
	
	$idsection = $_GET['secid'];
	$title = $_POST['title'];
	$content = $_POST['cont'];
	
	$ret = threads::insertthread($title, $content, $s_username, $idsection);
	
	header("Location: verseccao.php?id=" . $idsection);
?>
