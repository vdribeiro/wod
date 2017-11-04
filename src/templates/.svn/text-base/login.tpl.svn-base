
{if $s_username}
	<div id="logged">
	<b>User: <a href="verutilizador.php?username={$s_username}">{$s_username}</a> </b><br><br>
	<form action="accaologout.php" method="post">
		<input type="submit" value="Logout" />
	</form>
	</div>
{else}
	<div id="login">
		<form action="accaologin.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username"/>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"/>
			<input type="submit" value="Login" />
		</form>
		
		<a href="registerUser.php"> Registar </a>
	</div>
{/if}
