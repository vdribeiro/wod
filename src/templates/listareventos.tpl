{include file=header.tpl}

<big><b>Eventos</b></big>
<br><br>

{if $s_username}
	<form action="criaeventoform.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Criar Novo Evento" /> 
	</form>
	<br>
	<br>
{/if}

<table>
	<tr>
		<th>Nome</th>
		<th>Descricao</th>
	</tr>
	{foreach from=$eventos item=evento}
		<tr>
			<td><a href="verevento.php?id={$evento.id}">{$evento.name}</a></td>
			<td>{$evento.content}<td>
		</tr>
	{/foreach}
</table>

{include file=footer.tpl}
