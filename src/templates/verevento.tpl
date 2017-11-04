{include file=header.tpl}

<big><b>Evento</b></big>
<br><br>

<table>
	<tr>
	<th>Nome</th>
	<th>Autor</th>
	<th>Estado</th>
	</tr>
	
	<tr>
	<td>{$evento.name}</td>
	<td>{$evento.author}</td>
	<td>{$evento.state}</td>
	{if $s_username}
		<td> <form action="editaeventoform.php?id={$evento.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)"">
			<input type="submit" value="E" /> 
		</form> </td>
		<td> <form action="delevento.php?id={$evento.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)"">
			 <input type="submit" value="X" /> 
		</form> </td>
	{/if}
	
	</tr>
</table>

<table>
	<tr>
	<th>Conteudo</th>
	</tr>
	
	<tr>
	<td>{$evento.content}</td>
	</tr>

	
</table>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>
	
{include file=footer.tpl}
