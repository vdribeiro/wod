<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	
	$cod = $_GET['cod'];
	$name = $_POST['name'];
	$details = $_POST['cont'];
	$state = $_POST['st'];
	
	$ret = projectos::editproject($cod, $name, $details, $s_username, $state);
	
	header("Location: listarprojectos.php");
?>
