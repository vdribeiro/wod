{include file=header.tpl}

<form name="input" action="editevento.php?id={$eventoid}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Nome:
	<input type="text" name="name" id="name"/>
	<br> <br>
	Conteudo: <br>
	<textarea name="cont" id="cont" rows="5" cols="80"></textarea>
	<br> <br>
	Estado:
	<select name="st" id="st">
	<option value="Active">Active</option>
	<option value="Finished">Finished</option>
	<option value="Disabled">Disabled</option></select>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />
</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
