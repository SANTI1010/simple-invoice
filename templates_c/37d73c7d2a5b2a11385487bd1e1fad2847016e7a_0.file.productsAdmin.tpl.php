<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 14:12:58
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\productsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbfa9dab4e4b8_30392635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37d73c7d2a5b2a11385487bd1e1fad2847016e7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\productsAdmin.tpl',
      1 => 1606396377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbfa9dab4e4b8_30392635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		    

	<div class="container">

		<button type="button" class="btn btn-primary logout"><a class="btn-text" href="logout/">Logout</a></button>


	<div class="container">
		<h1>Dar permisos</h1>
		<form action="UsersPermits" method="post">
			<div class="row align-items-end">
				<div class="col-md-6">
					<select name="userNombre" class="form-control">
				      	<option value="0"  hidden>--Seleccionar--</option>
					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
						    <option><?php echo $_smarty_tpl->tpl_vars['user']->value->nombre;?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				    </select>
			    </div>
			    <div class="col-md-2 form-check-inline">
		  			<label class="col-md-6 form-check-inline">
		    			<input type="radio" class="form-check-input" value="admin" name="radioPermiso">Admin
		  			</label>
				</div>
				<div class="col-md-2 form-check-inline">
		  			<label class="col-md-6 form-check-inline">
		    			<input type="radio" class="form-check-input" value="user" name="radioPermiso">User
		  			</label>
				</div>

		    </div>

			<button type="submit" class="btn btn-primary">Confirmar cambios</button>
		</form>	  

	</div>

	<div class="container">
		<ul class="list-group">
	  		<h1 class="titulo">Lista de Usuarios</h1>
	      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
	  			<li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['user']->value->nombre;?>
<button type="button" class="btn btn-danger"> <a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
">Borrar</a></button></li>      		
	     	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 	</ul>
 	</div>

 	<div class="container">
      	<ul class="list-group">
      		<h1 class="titulo">Listado de items</h1>
          	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            
      			<li class="list-group-item list-group-item-success"><p>El producto es <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</p><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
 <button type="button" class="btn btn-warning"> <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Detalle</a></button></li>      		
         	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     	</ul>

     	<h1 class="titulo">Listado de Categorias</h1>
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    		<button type="button" class="btn btn-danger"><a class="btn-text" href="ordenar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Filtrar por <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a></button>
    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

</div>
		<div class="container">
			<h1 class="titulo">Agregar items</h1>
		      <form action="insert" method="post">
		          <div class="form-group">
		          	<label for="inputState">Categorias</label>
				      <select name="categoria" class="form-control">
				      	<option id="optionOculto" value="0"  hidden>--Seleccionar--</option>
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
		            <input class="form-control" id="marca" name="input_marca" aria-describedby="emailHelp">
		          </div>
		          <div class="form-group">
		            <label for="description">Talle</label>
		            <input class="form-control" id="description" name="input_talle">
		          </div>
		          <div class="form-group">
		              <label for="priority">Precio</label>
		              <input class="form-control" id="priority" name="input_precio">
		            </div>
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>
		</div>	

	<div class="container">
		<ul class="list-group">
	  		<h1 class="titulo">Lista de categorias</h1>
	      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
	  			<li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
<button type="button" class="btn btn-danger"> <a href="deleteCategories/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Borrar</a></button><button type="button" class="btn btn-warning"> <a href="editCategories/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Editar</a></button></li>      		
	     	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 	</ul>
 	</div>
 	<div class="container">
			<h1 class="titulo">Agregar Categorias</h1>
		      <form action="insertCategories" method="post">
		          <div class="form-group">
		         
		            <label for="categoria">Nombre de nueva categoria</label>
		            <input class="form-control" id="categoria" name="input_categoria">
		          
		          </div>
		 
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
<?php }
}
