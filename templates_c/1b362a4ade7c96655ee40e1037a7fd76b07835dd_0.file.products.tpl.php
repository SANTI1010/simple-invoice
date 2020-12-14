<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 00:58:42
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcacd323c2921_13323211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b362a4ade7c96655ee40e1037a7fd76b07835dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\products.tpl',
      1 => 1607126269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fcacd323c2921_13323211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
               
    <?php if ($_smarty_tpl->tpl_vars['rol']->value != NULL) {?>           
        <button type="button" class="btn btn-primary logout"><a class="btn-text" href="logout/">Logout</a></button>
    <?php } else { ?>
	   <button type="button" class="btn login"><a class="btn-text" href="login/">Login</a></button><br>
    <?php }?>    




    <!---------------------->
    <!--------ADMIN--------->
    <!---------------------->

    <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'admin') {?> 
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
            <h1 class="titulo">Agregar Producto</h1>
              <form action="insert" method="post" enctype="multipart/form-data">
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
                  <input type="file" name="input_name" id="imageToUpload">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
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

    <?php }?>    


    <!---------------------->
    <!--------USER--------->
    <!---------------------->
    <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'user' || $_smarty_tpl->tpl_vars['rol']->value == NULL) {?>    
        
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
</li>              
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
  
 
    
    <?php }?>
  
    <?php if ($_smarty_tpl->tpl_vars['rol']->value != 'admin') {?>
        <div class="container">
            <h1 class="titulo">Filtro por Categorias</h1>
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
    <?php }?>    

	<div class="container">
      	<ul class="list-group">
      		<h1 class="titulo">Listado de productos</h1>

            <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'user') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      			   <li class="list-group-item">
                        <p>El producto es <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</p>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>

                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
">
                        <button type="button" class="btn btn-warning">
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Detalle</a>
                        </button>
                    </li>      		
         	    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
            <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'admin') {?>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <li class="list-group-item">
                        <p>El producto es <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</p>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>

                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
">
                        <button type="button" class="btn btn-warning"> 
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Detalle</a>
                        </button>
                        <button type="button" class="btn btn-success"> 
                            <a href="editProducts/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Editar producto</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Eliminar</a>
                        </button>

                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
            <?php } else { ?> 

                <!--<?php echo $_smarty_tpl->tpl_vars['countFilas']->value;?>
 viene del controller-->
                <?php $_smarty_tpl->_assignInScope('articulo_por_pagina', 3);?>
                <?php $_smarty_tpl->_assignInScope('paginas', $_smarty_tpl->tpl_vars['countFilas']->value/$_smarty_tpl->tpl_vars['articulo_por_pagina']->value);?>
                <?php $_smarty_tpl->_assignInScope('paginas_total', ceil($_smarty_tpl->tpl_vars['paginas']->value));?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productLimit']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <li class="list-group-item list-group-item-success"><p>El producto es <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</p><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
"><button type="button" class="btn btn-warning">
                    <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
">Detalle</a></button></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <nav aria-label= "Paginacion">
                    

                        <div class="paginador">
                            <ul>
                                <li class="page-item <?php if ($_GET['pagina'] <= 1) {?> disabled <?php } else { ?> '' <?php }?>">
                                    <a class="page-link" href="products?pagina=<?php echo $_GET['pagina']-1;?>
">Anterior</a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['paginas']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['paginas']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <li class="pageSelected page-item <?php if ($_GET['pagina'] == $_smarty_tpl->tpl_vars['i']->value+1) {?> active <?php } else { ?> '' <?php }?> ">
                                        <a class="page-link" href="products?pagina=<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>
                                    </li>
                                <?php }
}
?>
                                <li class="page-item <?php if ($_GET['pagina'] >= $_smarty_tpl->tpl_vars['paginas']->value) {?> disabled <?php } else { ?> '' <?php }?>">
                                    <a class="page-link" href="products?pagina=<?php echo $_GET['pagina']+1;?>
">Siguiente</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            <?php }?> 

     	</ul>
    </div>

   
	<section>
		<div class="contenedor">
			<h2 class="barraProductos">Productos</h2>
			<div class="listaProductos">
				<div class="productos">
					<a target="_blank" href="rodilleras.html">
						<img src="img/rodilleraMizuno.jpg">
						<h3>Rodilleras</h3>
					</a>
					<p class="centrarTexto">Disponemos de un gran stock de rodilleras protectoras con las mejores marcas para niños y adultos.</p>		
				</div>

				<div class="productos">
					<a target="_blank" href="mangas.html">
						<img src="img/mangasMizuno.jpg">
						<h3>Mangas</h3>
					</a>
					<p class="centrarTexto">Disponemos de un gran stock de mangas protectoras con las mejores marcas para niños y adultos.</p>
				</div>
			</div>
		</div>
	</section>

	<section>
         <div class="contenedor">
            <h2 class="barraProductos centrarTexto">Formulario de contacto</h2>
            <fieldset>
                <legend>Información personal</legend>
                <br>
                <form id="miForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" placeholder="Tu nombre">
                        <div class="errorNombre">
                            <span>Debe ingresar el nombre</span>
                        </div>
        
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" placeholder="Tu correo electrónico">
                        <div class="errorEmail">
                            <span>Debe ingresar E-mail</span>
                        </div>
        
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" placeholder="Tu dirección">
                        <div class="errorDireccion">
                            <span>Debe ingresar la dirección</span>
                        </div>
        
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" placeholder="Tu teléfono">
                        <div class="errorTelefono">
                            <span>Debe ingresar el teléfono</span>
                        </div>
        
                    <div class="captcha">
                        <img src="img/captcha.jpg" id="mainCaptcha">
                        <div class="error">
                            <span>CAPTCHA INCORRECTO. Vuelva a intentarlo.</span>
                        </div>
                        <div class="correcto">
                            <span>INGRESO EXITOSO ! !</span>
                        </div>
                        <div class="vacio">
                            <span>Debe ingresar el captcha</span>
                        </div>  
                        <input type="text" id="ingresoCaptcha" placeholder="Ingresar captcha">  
                        <input id="btnValidar" type="submit" value="Enviar">
                    </div>
                </form>
            </fieldset>
        </div>
    </section>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
