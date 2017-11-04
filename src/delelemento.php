<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/elementos.php');
	
	$hid=$_GET['hid'];
	$pid=$_GET['pid'];
	$did=$_GET['did'];

	$ret2 = elementos::delcontract($hid,$pid,$did);
	$ret = elementos::delelemento($hid);
	
	header("Location: verprojecto.php?id=" . $pid);
?>
