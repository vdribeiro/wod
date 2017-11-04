{include file=header.tpl}

<big><b>Utilizador</b></big>
<br><br>

<table>
	<tr>
	<th>Nome</th>
	<th>Email</th>
	<th>Endereco</th>
	<th>Idade</th>
	</tr>
	
	<tr>
	<td>{$user.name}</td>
	<td>{$user.email}</td>
	<td>{$user.address}</td>
	<td>{$user.age}</td>
	</tr>
	
<table>

{if ($s_username == $user.username)}
	<a href="editself.php?username={$user.username}">edit profile</a></td>

{else} 
	{if ($s_tipo == "admin")}
		<a href="edituser.php?username={$user.username}">edit user</a></td>
	{/if}
{/if}
	
{include file=footer.tpl}
