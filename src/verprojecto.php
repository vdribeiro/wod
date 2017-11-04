<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/elementos.php');
	require_once('database/versoes.php');

	$cod = $_GET['id'];

	$projecto = projectos::getproject($cod);

	if ($projecto==null) header("Location: index.php");
	
	$versoes = versoes::getbyProject($cod);
	$elementos = elementos::getbyProject($cod);
	$candidaturas = projectos::getcandidaturas($cod);
	
	$smarty->assign("projecto", $projecto);
	$smarty->assign("versoes", $versoes);
	$smarty->assign("elementos", $elementos);
	$smarty->assign("candidaturas", $candidaturas);

	$smarty->display("verprojecto.tpl");

?>
