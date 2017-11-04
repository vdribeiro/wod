<?
	require_once('includes/base.php');
	require_once('database/eventos.php');

	$codevento = $_GET['id'];

	$evento = eventos::getByCodEvento($codevento);

	if ($evento== null) header("Location: index.php");

	$smarty->assign("evento", $evento);
	$smarty->display("verevento.tpl");
?>
