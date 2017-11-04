<?
	require_once('includes/base.php');
	require_once('database/utilizadores.php');
	require_once('database/developers.php');
	require_once('database/clients.php');
	require_once('database/admins.php');
	

	if(!isset($_GET['username'])) die('erro com a identificação de utilizador');

	$username = $_GET['username'];
	
	//CLIENTES

	$user = clients::getByUsername( $username);
	if($user != null){
		echo "é client";
		$smarty->assign("user", $user);

		$smarty->display('editcli.tpl');
	}
	else {
	//DEVELOPERS
	$user = developers::getByUsername( $username);
	if($user){

		$smarty->assign("user", $user);

		$smarty->display('editdev.tpl');
	}
	//admins
	else{
	$user = admins::getByUsername( $username);
	if($user){

		$smarty->assign("user", $user);

		$smarty->display('editadm.tpl');
	}
	
	//NORMAL USER
	else{
		$user = utilizadores::getByUsername($username);

		if ($user== null) header("Location: index.php");

		$smarty->assign("user", $user);

		$smarty->display("edituser.tpl");
	}
	}
	}
		/*
		

		$target = Developers::getByUsername( $username);
		if($target){
			echo "é dev";
			$smarty->assign("user", $target);

			$smarty->display('editdev.tpl')
		}
		
		$target = Admins::getByUsername( $username);
		if($target){
			echo "é admin";
			$smarty->assign("user", $target);

			$smarty->display('editadmin.tpl')
		}*/

	
?>
