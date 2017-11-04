<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/elementos.php');
	
	$did=$_GET['did'];
	$pid=$_GET['pid'];
	$trab=$_GET['trab'];
	$guito=$_GET['guito'];

	$date = date('m/d/Y', time());
	
	$ret = elementos::insertelemento($trab, $guito, $date);
	$val = elementos::retultimoelemento();
	$ret2 = elementos::contrataele($val, $pid, $did);
	$ret3 = projectos::delcandidatura($did,$pid);
	
	header("Location: verprojecto.php?id=" . $pid);
?>
