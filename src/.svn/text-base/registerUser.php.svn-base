<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	

	if(isset($_POST['username']))
	{
		//echo " a inserir na BD <p> ";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		//echo "a informação recebida $username, $password, $name, $email, $age, $address <p>";

		if(utilizadores::addUser($username, $password, $name, $email, $age, $address))
                {
			//echo "inserido na BD <p>";
			$smarty->assign("username", $username);
			$smarty->display('verutilizador.tpl');
			
		}
		else{
			//echo "erro a inserir na BD <p>";
			$smarty->display('registerUser.tpl');
		}
		
	}
	else{
		$smarty->display('registerUser.tpl');
	}

	
?>
