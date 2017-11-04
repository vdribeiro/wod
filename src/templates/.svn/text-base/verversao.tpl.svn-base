{include file=header.tpl}

<big><b>Versao</b></big>
<br><br>

{if $s_username}
	<form action="criataskform.php?vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Nova Tarefa" /> 
	</form>
	<form action="criacodeform.php?vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Novo Codigo Fonte" /> 
	</form>
	<form action="criadocform.php?vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Nova Documentacao" /> 
	</form>
	<br>
{/if}

<big><b>Tarefas</b></big>
<br><br>

<table>
	<tr>
	<th>Nome</th>
	<th>Detalhes</th>
	<th>Prioridade</th>
	</tr>
	
	{foreach from=$tasks item=task}
		<tr>
			<td><a href="vertarefa.php?id={$task.id}&vid={$versao.id}">{$task.name}</a></td>
			<td>{$task.details}</td>
			<td>{$task.priority}</td>
			{if $s_username}
				<td> <form action="editatarefaform.php?id={$task.id}&vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="deltarefa.php?id={$task.id}&vid={$versao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<br><br>
<big><b>Codigos Fonte</b></big>
<br><br>

<table>
	<tr>
	<th>Identificacao</th>
	<th>Data da Ultima Edicao</th>
	</tr>
	
	{foreach from=$codes item=code}
		<tr>
			<td><a href="vercodigo.php?id={$code.id}&vid={$versao.id}">{$code.id}</a></td>
			<td>{$code.last_edited}</td>
			{if $s_username}
				<td> <form action="editacodigoform.php?id={$code.id}&vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delcodigo.php?id={$code.id}&vid={$versao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<br><br>
<big><b>Documentacao</b></big>
<br><br>

<table>
	<tr>
	<th>Identificacao</th>
	<th>Data da Ultima Edicao</th>
	</tr>
	
	{foreach from=$docs item=doc}
		<tr>
			<td><a href="verdocs.php?id={$doc.id}&vid={$versao.id}">{$doc.id}</a></td>
			<td>{$doc.last_edited}</td>
			{if $s_username}
				<td> <form action="editadocsform.php?id={$doc.id}&vid={$versao.id}&pid={$projecto.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="deldocs.php?id={$doc.id}&vid={$versao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<p>
	<a href="verprojecto.php?id={$projecto.id}"> Anterior</a>
</p>

{include file=footer.tpl}
