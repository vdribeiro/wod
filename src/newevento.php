<?
	require_once('includes/base.php');
	require_once('database/eventos.php');
	
	$name = $_POST['name'];
	$content = $_POST['cont'];
	
	$ret = eventos::insertevento($name, $content, $s_username);
	
	header("Location: index.php");
	
?>
