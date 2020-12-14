<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-20 13:56:03
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\productsCSR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb7bce3e799e5_76741987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c0473e8574dfcdb1b17034171d7f17998f5153' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\productsCSR.tpl',
      1 => 1605876579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:createProducts.tpl' => 1,
    'file:vue/product.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb7bce3e799e5_76741987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php $_smarty_tpl->_subTemplateRender("file:createProducts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>


		<div class="col-md-8">
			<?php $_smarty_tpl->_subTemplateRender("file:vue/product.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>

	</div>

	<div class="mensajes"></div>
</div>
	

<?php echo '<script'; ?>
 src="js/products.js"><?php echo '</script'; ?>
>	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
