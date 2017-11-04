<?php /* Smarty version 2.6.25, created on 2010-05-21 19:34:14
         compiled from verevento.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="verevento.php" method="get">

</form>


<tr>
	<td><a href="verevento.php?id=<?php echo $this->_tpl_vars['evento']['id']; ?>
"><?php echo $this->_tpl_vars['evento']['name']; ?>
</a></td>
	<td><?php echo $this->_tpl_vars['evento']['content']; ?>
 <?php echo $this->_tpl_vars['evento']['author']; ?>
</td>
</tr>
	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>