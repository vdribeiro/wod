<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$state = $_POST['state'];
		

	if(utilizadores::edituser($username, $name, $email, $age, $address, $state))
        {
		$user = utilizadores::getByUsername($username);
		$smarty->assign("user", $user);

		$smarty->display('verutilizador.tpl');
			
	}
	else{

		$smarty->display('listarutilizadores.tpl');
	}
			
?>
