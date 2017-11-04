<?
	require_once('includes/base.php');
	require_once('database/seccoes.php');
	require_once('database/threads.php');

	//if(!isset($_GET['id'])) die('Tem de indicar o id da seccao');

	$cod = $_GET['id'];

	$seccao = seccoes::getsection($cod);

	if ($seccao==null) header("Location: index.php");
	
	$threads = threads::getbysection($cod);
	
	$smarty->assign("threads", $threads);
	$smarty->assign("seccao", $seccao);

	$smarty->display("verseccao.tpl");
?>
