<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 22:58:24
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\msjError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa71880862fa7_87833981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b79bfe8d6b1e1752ad92194e287ee19d51a793' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\msjError.tpl',
      1 => 1604786291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa71880862fa7_87833981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="contenedor">
	<h1><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</h1>
</div>   

	<a href="volver">Volver</a>
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
