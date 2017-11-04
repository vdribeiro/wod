{include file=header.tpl}

<big><b>Projecto</b></big>
<br><br>

{if $s_username}

	<td> <form action="criaversaoform.php?pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Criar Nova Versao" /> 
	</form></td>
	<br>

{/if}

<big><b>Versoes</b></big>
<br><br>

<table>
	<tr>
	<th>Numero</th>
	<th>Estado</th>
	</tr>
	
	{foreach from=$versoes item=versao}
		<tr>
			<td><a href="verversao.php?id={$versao.id}&pid={$projecto.id}">{$versao.version_number}</a></td>
			<td>{$versao.state}</td>
			{if $s_username}
				<td> <form action="editaversaoform.php?id={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delversao.php?id={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<br><br>
<big><b>Equipa</b></big>
<br><br>

<table>
	<tr>
	<th>Nome</th>
	<th>Funcao</th>
	<th>Salario</th>
	<th>Estado</th>
	</tr>
	
	{foreach from=$elementos item=elemento}
		<tr>
			<td><a href="verelemento.php?id={$elemento.id}&pid={$projecto.id}">{$elemento.developer_id}</a></td>
			<td>{$elemento.job}</td>
			<td>{$elemento.salary}</td>
			<td>{$elemento.state}</td>
			{if $s_username}
				<td> <form action="editaelementoform.php?hid={$elemento.id}&pid={$projecto.id}&did={$elemento.developer_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delelemento.php?hid={$elemento.id}&pid={$projecto.id}&did={$elemento.developer_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<br><br>
<big><b>Candidaturas</b></big>
<br><br>

<table>
	<tr>
	<th>Nome</th>
	<th>Estado</th>
	<th>Funcao</th>
	<th>Salario</th>
	</tr>
	
	{foreach from=$candidaturas item=candidatura}
		<tr>
			<td>{$candidatura.developer_id}</a></td>
			<td>{$candidatura.state}</td>
			<td>{$candidatura.job}</td>
			<td>{$candidatura.salary}</td>
			{if $s_username}
				<td> <form action="aceitacandform.php?did={$candidatura.developer_id}&pid={$candidatura.project_id}&trab={$candidatura.job}&guito={$candidatura.salary}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="Aceitar" /> 
				</form> </td>
				<td> <form action="delcandidatura.php?did={$candidatura.developer_id}&pid={$candidatura.project_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<p>
	<a href="listarprojectos.php"> Anterior</a>
</p>


{include file=footer.tpl}
