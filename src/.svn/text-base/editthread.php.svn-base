<?
	require_once('includes/base.php');
	require_once('database/threads.php');
	
	$cod = $_GET['cod'];
	$idsection= $_GET['cods'];
	$title = $_POST['title'];
	$content = $_POST['cont'];
	
	$ret = threads::editthread($cod, $title, $content, $s_username);
	
	header("Location: verseccao.php?id=" . $idsection);
?>
