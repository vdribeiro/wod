<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (Utilizadores::existsUsernamePassword($username, $password)) {
		$_SESSION["s_username"] = $username;
		/* if (Admins::isAdmin($username))
			$_SESSION["s_tipo"] = 'admin'; 
		else
			$_SESSION["s_tipo"] = 'user'; */
	}
	header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
