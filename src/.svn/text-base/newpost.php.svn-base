<?
	require_once('includes/base.php');
	require_once('database/posts.php');
	
	$idthread = $_GET['thrid'];
	$title = $_POST['title'];
	$content = $_POST['cont'];
	
	$ret = posts::insertpost($title, $content, $s_username, $idthread);
	
	header("Location: verthread.php?id=" . $idthread);
?>
