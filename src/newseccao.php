<?
	require_once('includes/base.php');
	require_once('database/seccoes.php');
	
	$name = $_POST['name'];
	$content = $_POST['cont'];

	$ret = seccoes::insertsection($name, $content, $s_username);
	
	header("Location: forum.php");
	
?>
