{include file=header.tpl}

<form name="input" action="editversao.php?cod={$version_id}&codp={$project_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Numero:
	<input type="text" name="num" id="num"/>
	<br> <br>
	Estado:
	<select name="st" id="st">
	<option value="Begin">Begin</option>
	<option value="Middle">Middle</option>
	<option value="Disabled">Disabled</option></select>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />

</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
