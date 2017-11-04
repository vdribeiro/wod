<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	require_once('database/clients.php');
	
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$TIN = $_POST['TIN'];
		

	if(utilizadores::edituser($username, $name, $email, $age, $address, $state))
        {
		clients::editcli($username, $TIN);
		$user = clients::getByUsername($username);
		$smarty->assign("user", $user);

		$smarty->display('verutilizador.tpl');
			
	}
	else{

		$smarty->display('listarutilizadores.tpl');
	}
			
?>
