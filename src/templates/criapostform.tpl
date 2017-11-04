{include file=header.tpl}

<form name="input" action="newpost.php?thrid={$tid}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Titulo:
	<input type="text" name="title" id="title"/>
	<br> <br>
	Texto: <br>
	<textarea name="cont" id="cont" rows="5" cols="80"></textarea>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />
</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
