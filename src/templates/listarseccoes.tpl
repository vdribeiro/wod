{include file=header.tpl}

<big><b>Forum</b></big>
<br><br>

{if $s_username}
	<form action="criaseccaoform.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Criar Nova Seccao" /> 
	</form>
	<br>
{/if}

<table>
	<tr>
	<th>Nome</th>
	<th>Autor</th>
	<th>Descricao</th>
	</tr>
	
	{foreach from=$seccoes item=seccao}
		<tr>
			<td><a href="verseccao.php?id={$seccao.id}">{$seccao.name}</a></td>
			<td>{$seccao.author}</td>
			<td>{$seccao.content}</td>
			{if $s_username}
				<td> <form action="editaseccaoform.php?ide={$seccao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delseccao.php?id={$seccao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

{include file=footer.tpl}


