<?
	require_once('includes/base.php');
	require_once('database/posts.php');
	
	$postid = $_GET['id'];

	$post = posts::getpost($postid);

	if ($post == null) header("Location: index.php");

	$smarty->assign("post", $post);
	$smarty->display("verpost.tpl");
?>