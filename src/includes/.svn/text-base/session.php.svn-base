<?
	session_set_cookie_params(0, '/~lbaw10g11/'); //CHANGE ME
	session_start();

	$s_username = $_SESSION['s_username'];
	$s_tipo = $_SESSION['s_tipo'];
	
	$smarty->assign('s_username', $s_username);
	$smarty->assign('s_tipo', $s_tipo);

	$smarty->assign('s_carrinho', $_SESSION["s_carrinho"]);

	$smarty->assign('s_messages', $_SESSION["s_messages"]);
	unset($_SESSION["s_messages"]);

	$smarty->assign('s_errors', $_SESSION["s_errors"]);
	unset($_SESSION["s_errors"]);

	$s_values = $_SESSION["s_values"];
	unset($_SESSION["s_values"]);
?>
