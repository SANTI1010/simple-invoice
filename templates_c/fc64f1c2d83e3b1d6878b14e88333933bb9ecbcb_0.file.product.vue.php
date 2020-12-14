<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 19:43:44
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\vue\product.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd5460eb2d69_80196248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc64f1c2d83e3b1d6878b14e88333933bb9ecbcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\vue\\product.vue',
      1 => 1606159820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd5460eb2d69_80196248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="vue-product">

	<ul id="product-list" class="list-group" >
		<li
		v-for="product in products"
		 class="list-group-item list-group-item-success">{{product.marca}} - {{product.precio}}

			<button id="btn-comment" :data="product.id_producto" class="btn btn-warning">Eliminar</button>
		</li>
	</ul>

</div>
<?php }
}
