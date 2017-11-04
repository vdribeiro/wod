<?php /* Smarty version 2.6.25, created on 2010-06-04 19:56:56
         compiled from login.tpl */ ?>

<?php if ($this->_tpl_vars['s_username']): ?>
	<div id="login">
	<?php echo $this->_tpl_vars['s_username']; ?>

		<form action="accaologout.php" method="post">
			<input type="submit" value="Logout" />
		</form>
	</div>
<?php else: ?>
	<div id="login">
		<form action="accaologin.php" method="post" accept-charset="UTF-8" onsubmit="return validateForm(this)"">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username"/>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"/>
			<input type="submit" value="Login" />
		</form>
	</div>
<?php endif; ?>