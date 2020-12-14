<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 03:42:24
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\updateCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc30a90de3c75_90958332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe00233d58eacd10e4e4b5868438b552b8c0b8ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\updateCategories.tpl',
      1 => 1606617741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc30a90de3c75_90958332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
			<div class="container">
		      <form action="updateCategories/<?php echo $_smarty_tpl->tpl_vars['categorie']->value->id_categoria;?>
" method="post">
		          <div class="form-group">
		            <label for="description">Nombre</label>
		            <input class="form-control" id="description" value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->nombre;?>
" name="update_nombre">
		          </div>
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>
		        <a href="volver">Volver</a>
		    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		<?php }
}
