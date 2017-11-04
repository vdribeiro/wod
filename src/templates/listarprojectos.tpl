{include file=header.tpl}

<big><b>Projectos</b></big>
<br><br>

{if $s_username}
	<form action="criaprojectoform.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Criar Novo Projecto" /> 
	</form>
	<form action="candidataform.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Candidatar-se a um Projecto" /> 
	</form>
	<br>
	<br>
{/if}

<table>
	<tr>
	<th>Identificador</th>
	<th>Nome</th>
	<th>Data inicio</th>
	<th>Detalhes</th>
	{if $s_username}
		<th>Estado</th>
		<th>Cliente</th>
	{/if}
	</tr>
	
	{foreach from=$projectos item=projecto}
		<tr>
			<td>{$projecto.id}</td>
			{if $s_username}
				<td><a href="verprojecto.php?id={$projecto.id}">{$projecto.name}</a></td>
			{else}
				<td>{$projecto.name}</td>
			{/if}
			<td>{$projecto.start_date}</td>
			<td>{$projecto.details}</td>
			{if $s_username}
				<td>{$projecto.state}</td>
				<td>{$projecto.client_id}</td>
				<td> <form action="editaprojectoform.php?ide={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delprojecto.php?id={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

{include file=footer.tpl}
