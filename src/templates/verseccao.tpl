{include file=header.tpl}

<big><b>Threads</b></big>
<br><br>

{if $s_username}
	<form action="criathreadform.php?sid={$seccao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Criar Nova Thread" /> 
	</form>
	<br>
{/if}

<table>
	<tr>
	<th>Titulo</th>
	<th>Autor</th>
	<th>Descricao</th>
	</tr>
	
	{foreach from=$threads item=thread}
		<tr>
			<td><a href="verthread.php?id={$thread.id}&sid={$seccao.id}">{$thread.title}</a></td>
			<td>{$thread.author}</td>
			<td>{$thread.content}</td>
			{if $s_username}
				<td> <form action="editathreadform.php?ide={$thread.id}&seid={$seccao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="E" /> 
				</form> </td>
				<td> <form action="delthread.php?id={$thread.id}&sid={$seccao.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	{/foreach}
	
</table>

<p>
	<a href="forum.php">Anterior</a>
</p>


{include file=footer.tpl}
