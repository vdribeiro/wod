<?
	require_once('includes/base.php');
	require_once('database/versoes.php');
	require_once('database/codigos.php');
	require_once('database/elementos.php');
	
	$version_id = $_GET['vid'];
	$project_id = $_GET['pid'];
	$content = $_POST['cont'];
	$last_edited = date('m/d/Y', time());
	$hired_id = elementos::obtemhired($s_username,$project_id);
	
	$ret = codigos::insertcodigo($content, $last_edited, $version_id, $hired_id);
	
	header("Location: verversao.php?id=" . $version_id . "&pid=" . $project_id);
?>
