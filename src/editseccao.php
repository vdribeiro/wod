<?
	require_once('includes/base.php');
	require_once('database/seccoes.php');
	
	$cod = $_GET['cod'];
	$name = $_POST['name'];
	$content = $_POST['cont'];
	
	$ret = seccoes::editsection($cod, $name, $content, $s_username);
	
	header("Location: forum.php");
?>
