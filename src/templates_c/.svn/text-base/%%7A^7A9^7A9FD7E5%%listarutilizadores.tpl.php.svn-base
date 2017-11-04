<?php /* Smarty version 2.6.25, created on 2010-05-21 19:31:15
         compiled from listarutilizadores.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table>

<tr><th>Username</th><th></th></tr>

<?php $_from = $this->_tpl_vars['utilizadores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['utilizador']):
?>
	<tr>
		<td><a href="verutilizador.php?username=<?php echo $this->_tpl_vars['utilizador']['username']; ?>
"><?php echo $this->_tpl_vars['utilizador']['username']; ?>
</a></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>