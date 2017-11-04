<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	
	$projecto_id=$_GET['ide'];
	
	$smarty->assign("projecto_id", $projecto_id);
	$smarty->display("editaprojectoform.tpl");
	
?>
