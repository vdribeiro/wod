<?
	require_once('includes/base.php');
	require_once('database/posts.php');
	
	$tid = $_GET['tid'];
	
	$smarty->assign("tid", $tid);
	$smarty->display("criapostform.tpl");
	
?>
