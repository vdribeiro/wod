{include file=header.tpl}

<form name="input" action="editthread.php?cod={$thread_id}&cods={$section_id}" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)" >
	Titulo:
	<input type="text" name="title" id="title"/>
	<br> <br>
	Descricao: <br>
	<input type="text" name="cont" id="cont"/>
	<br> <br>
	<input type="reset" value="Reset" />
	<input type="submit" value="Ok" />

</form>

<p>
 <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Anterior</a>
</p>


{include file=footer.tpl}
