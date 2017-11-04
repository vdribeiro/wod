<?
	require_once('includes/base.php');
	require_once('database/threads.php');
	require_once('database/posts.php');
	
	$p2id = $_GET['id'];
	
	$p2tit= $_GET['pt'];
	
	$t2id = $_GET['trid'];
	
	$p2author = $_GET['aut'];
	
	$p2cont = $_GET['pcont'];
	
	$smarty->assign("pid", $p2id);
	
	$smarty->assign("ptit", $p2tit);
	
	$smarty->assign("tid", $t2id);
	
	$smarty->assign("pauthor", $p2author);
	
	$smarty->assign("pcont", $p2cont);
	
	$smarty->display("respostform.tpl");
	
?>
