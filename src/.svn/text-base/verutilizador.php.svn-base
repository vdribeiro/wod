<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');

	if(!isset($_GET['username'])) die('Tem de indicar o username do utilizador');

	$username = $_GET['username'];

	$user = utilizadores::getByUsername($username);

	if ($user== null) header("Location: index.php");

	$smarty->assign("user", $user);

	$smarty->display("verutilizador.tpl");
?>