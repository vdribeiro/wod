<?
	require_once('includes/base.php');
	require_once('database/threads.php');
	require_once('database/posts.php');

	//if(!isset($_GET['id'])) die('Tem de indicar o id da thread');

	$cod = $_GET['id'];
	$cods = $_GET['sid'];

	$thread = threads::getthread($cod);

	if ($thread==null) header("Location: index.php");
	
	$posts = posts::getbythread($cod);
	$str = "verseccao.php?id=" . $cods;
	
	$smarty->assign("posts", $posts);
	$smarty->assign("thread", $thread);
	$smarty->assign("str", $str);
	$smarty->assign("asecid", $cods);

	$smarty->display("verthread.tpl");
?>
