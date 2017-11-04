<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/versoes.php');
	
	$cod = $_GET['cod'];
	$pid= $_GET['codp'];
	
	$version_number = $_POST['num'];
	$state = $_POST['st'];
	
	$ret = versoes::editversion($cod, $version_number, $state);
	
	header("Location: verprojecto.php?id=" . $pid);
?>
