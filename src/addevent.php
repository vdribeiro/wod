<?
	require_once('includes/base.php');
	require_once('database/events.php');
	
	

	if(isset($_POST['name']))
	{
		//$id = $_POST['id'];
		$name = $_POST['name'];
		$content = $_POST['content'];
		$author = $_POST['author'];
		$state = $_POST['state'];
		

		$event  = eventos::addevent($name, $content, $author, $state))
                
		$smarty->assign("user", $user);

		$smarty->display('verutilizador.tpl');
			
		
	}
	else{
		$smarty->display('addevent.tpl');
	}

	
?>
