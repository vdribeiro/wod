{include file=header.tpl}

<form name="input" action="editcode.php?id={$code_id}&vid={$version_id}&pid={$project_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Conteudo:
	<textarea name="cont" id="cont" rows="5" cols="80"></textarea>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />
</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
