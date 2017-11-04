{include file=header.tpl}

<form name="input" action="newtask.php?vid={$version_id}&pid={$project_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Nome:
	<input type="text" name="nome" id="nome"/>
	<br> <br>
	Detalhes:
	<input type="text" name="det" id="det"/>
	<br> <br>
	Prioridade:
	<input type="text" name="pri" id="pri"/>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />
</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
