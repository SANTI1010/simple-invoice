<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 14:37:22
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81ab022f61a6_16841755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90aafc78e863952cfef29f336f9a5492a8acd56c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\categories.tpl',
      1 => 1602333427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f81ab022f61a6_16841755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container">

  	<ul class="list-group">
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>

      			<li class="list-group-item list-group-item-success" ><?php echo $_smarty_tpl->tpl_vars['categorie']->value->marca;?>
 <button type="button" class="btn btn-info" >$ <?php echo $_smarty_tpl->tpl_vars['categorie']->value->precio;?>
</button> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->talle;?>
</li>
      		
     	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 	</ul>

 	 	 <a href="volver">Volver</a>
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
