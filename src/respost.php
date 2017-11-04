<?
	require_once('includes/base.php');
	require_once('database/posts.php');
	
	$idpost = $_GET['postid'];
	$ptitle = $_GET['posttitle'];
	$idthread = $_GET['threadid'];
	$author = $_GET['postauthor'];
	$pcontent = $_GET['postcont'];
	
	$title = $_POST['title'];
	$content = $_POST['cont'];
	
	$str1 = "RE: " . $ptitle . " - " . $title;
	$str2 = $author . " disse: " . $pcontent . " - " . $s_username . " diz: " . $content;
	
	$ret = posts::insertpost($str1, $str2, $s_username, $idthread);
	
	header("Location: verthread.php?id=" . $idthread);
?>
