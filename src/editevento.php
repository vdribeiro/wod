<?
	require_once('includes/base.php');
	require_once('database/eventos.php');
	
	$cod = $_GET['id'];
	$name = $_POST['name'];
	$content = $_POST['cont'];
	$state = $_POST['st'];
	
	$ret = eventos::editevento($cod, $name, $content, $s_username, $state);
	
	header("Location: index.php");
?>
