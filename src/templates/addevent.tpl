{include file=header.tpl}

<big><b>Novo Evento</b></big>
<br><br>

<form action="addevent.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm2(this)"">
<table>
	<tr>
	<td><label for="name">name:</label> </td>
	<td><input type="text" name="name" id="name"/></td>
	</tr>
	<tr>
	<td><label for="password">Password:</label></td>
	<td><input type="password" name="password" id="password"/></td>
	</tr>
	<tr>
	<td><label for="age">age:</label></td>
	<td><input type="text" name="age" id="age"/></td>
	</tr>
	<tr>
	<td><label for="email">email:</label></td>
	<td><input type="text" name="email" id="email"/></td>
	</tr>

</table>
	<input type="submit" value="register" />
</form>  


