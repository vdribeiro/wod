<?
	require_once('includes/base.php');
	require_once('database/projectos.php');
	require_once('database/versoes.php');
	
	$project_id = $_GET['pid'];;
	$version_number = $_POST['num'];
	
	$ret = versoes::insertversion($version_number, $project_id);
	
	header("Location: verprojecto.php?id=" . $project_id);
?>
