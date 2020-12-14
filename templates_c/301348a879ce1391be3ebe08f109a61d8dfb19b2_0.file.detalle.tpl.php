<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 00:02:09
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcabff189ed59_64158334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301348a879ce1391be3ebe08f109a61d8dfb19b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\detalle.tpl',
      1 => 1607122862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/comment.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fcabff189ed59_64158334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container col-md-7" >
		<div class="row">
			<div class="col-md-6">
			  	<ul class="list-group">
			  		
			      		<li class="list-group-item list-group-item-success">La categoria es: <?php echo $_smarty_tpl->tpl_vars['detalle']->value->nombre;?>
</li>
			      		<li class="list-group-item list-group-item-success">La marca es: <?php echo $_smarty_tpl->tpl_vars['detalle']->value->marca;?>
</li>
			      		<li class="list-group-item list-group-item-success">El talle es: <?php echo $_smarty_tpl->tpl_vars['detalle']->value->talle;?>
</li>
			      		<li class="list-group-item list-group-item-success">El precio es: $<?php echo $_smarty_tpl->tpl_vars['detalle']->value->precio;?>
</li>
			      		<li class="list-group-item list-group-item-success"><img src="<?php echo $_smarty_tpl->tpl_vars['detalle']->value->imagen;?>
"></li>
			 	</ul>
		 	</div>

		 	<input id="id_product_hidden" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['detalle']->value->id_producto;?>
">
		 	<input id="id_user_hidden" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
">
		 	<input id="rol_user_hidden" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['rol_user']->value;?>
">

		 	<div class="col-md-6">
				<?php $_smarty_tpl->_subTemplateRender("file:vue/comment.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

		 	<a href="volver">Volver</a>
		</div> 	
	</div>

<?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	

<?php }
}
