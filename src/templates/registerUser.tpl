{include file=header.tpl}

<big><b>Registar</b></big>
<br><br>

<form action="registerUser.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm2(this)"">
<table>
	<tr>
	<td><label for="username">Username:</label> </td>
	<td><input type="text" name="username" id="username"/></td>
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
	<tr>
	<td><label for="address">address:</label></td>
	<td><input type="text" name="address" id="address"/></td>
	</tr>
	<tr>
	<td><label for="name">name:</label></td>
	<td><input type="text" name="name" id="name"/></td>
	</tr>
	<td>Select a Role:</td>
	<td>
	<select name="role" id="ComboBox">
	  <option value="Developer">Developer</option>
	  <option value="Client">Client</option>
	  <option value="NolmalUser">NolmalUser</option></select>
	</td>
	</tr>
	<tr>
	<td><label for="taxID">taxID:</label></td>
	<td><input type="text" name="taxID" id="taxID"/></td>
	</tr>
</table>
	<input type="submit" value="register" />
</form>  


