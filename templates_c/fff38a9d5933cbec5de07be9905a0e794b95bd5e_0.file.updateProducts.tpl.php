<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 13:37:51
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\updateProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6391f463bd3_31766195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff38a9d5933cbec5de07be9905a0e794b95bd5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\updateProducts.tpl',
      1 => 1606617711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc6391f463bd3_31766195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div class="container">
		      <form action="updateProducts/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data">
		          <div class="form-group">
		          	<label for="inputState">Categorias</label>
				      <select name="categoria" class="form-control">
					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
						    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				      </select>
		            <label for="marca">Marca</label>
		            <input class="form-control" id="marca" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
" name="update_marca" aria-describedby="emailHelp">		         
		          </div>
		          <div class="form-group">
		            <label for="description">Talle</label>
		            <input class="form-control" id="description" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
" name="update_talle">
		          </div>
		          <div class="form-group">
		              <label for="priority">Precio</label>
		              <input class="form-control" id="priority" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
" name="update_precio">
		            </div>

		            <div class="form-group">
		            	<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
">
		            </div>
		           <input type="hidden" name="previous_img" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
"> 
		           <input type="file" name="update_img" id="img_product"> 
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>

		        <a href="volver">Volver</a>
		    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		<?php }
}
