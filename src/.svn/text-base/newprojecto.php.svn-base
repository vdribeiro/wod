<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	
	$name = $_POST['name'];
	$details = $_POST['cont'];

	//$today = getdate();
	$date = date('m/d/Y', time());
	
	$ret = projectos::insertproject($name, $date, $details, $s_username);
	
	header("Location: listarprojectos.php");
	
?>
