{include file=header.tpl}

<big><b>Posts</b></big>
<br><br>

{if $s_username}
	<form action="criapostform.php?tid={$thread.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
		 <input type="submit" value="Novo Post" /> 
	</form>
	<br>
{/if}

{foreach from=$posts item=post}

	<table>
		<tr>
		<th>Titulo</th>
		<th>Autor</th>
		</tr>
		
		<tr>
			<td><a href="verpost.php?id={$post.id}">{$post.title}</a></td>
			<td>{$post.author}</td>
			{if $s_username}
				<td> <form action="delpost.php?id={$post.id}&tid={$thread.id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
					 <input type="submit" value="X" /> 
				</form> </td>
			{/if}
		</tr>
	</table>

	<table>
		<tr>
		<th><br>Conteudo</th>
		</tr>
		
		<tr>
			<td>{$post.content}<br><br></td>
		</tr>
		{if $s_username}
			<td> <form action="respostform.php?id={$post.id}&pt={$post.title}&trid={$thread.id}&aut={$post.author}&pcont={$post.content}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
				 <input type="submit" value="R" /> 
			</form> </td>
		{/if}
	
	</table>
	<br>
{/foreach}

<p>
	<a href="verseccao.php?id={$asecid}"> Anterior</a>
</p>

{include file=footer.tpl}
