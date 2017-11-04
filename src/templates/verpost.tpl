{include file=header.tpl}

<big><b>Post</b></big>
<br><br>

<table>
	<tr>
	<th>Titulo</th>
	<th>Autor</th>
	</tr>
	
	<tr>
	<td>{$post.title}</td>
	<td>{$post.author}</td>

	</tr>
</table>

<table>
	<tr>
	<th>Conteudo</th>
	</tr>
	
	<tr>
	<td>{$post.content}</td>
	</tr>
	
	
</table>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>
	
{include file=footer.tpl}
