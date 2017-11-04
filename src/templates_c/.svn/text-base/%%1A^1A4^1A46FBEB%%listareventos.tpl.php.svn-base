<?php /* Smarty version 2.6.25, created on 2010-05-21 18:51:16
         compiled from listareventos.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="listareventos.php" method="get">

	Nome: <input type="text" name="name" />

	<input type="submit" value="Pesquisar" />
</form>

<table>
	<tr><th>Nome</th><th>Conteudo</th><th>Autor</th></tr>
	<?php $_from = $this->_tpl_vars['eventos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['evento']):
?>
		<tr>
			<td><a href="verevento.php?id=<?php echo $this->_tpl_vars['evento']['id']; ?>
"><?php echo $this->_tpl_vars['evento']['name']; ?>
</a></td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>