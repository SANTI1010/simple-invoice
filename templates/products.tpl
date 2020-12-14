{include file="header.tpl"}
               
    {if $rol != NULL}           
        <button type="button" class="btn btn-primary logout"><a class="btn-text" href="logout/">Logout</a></button>
    {else}
	   <button type="button" class="btn login"><a class="btn-text" href="login/">Login</a></button><br>
    {/if}    




    <!---------------------->
    <!--------ADMIN--------->
    <!---------------------->

    {if $rol == 'admin'} 
        <div class="container">
            <h1>Dar permisos</h1>
            <form action="UsersPermits" method="post">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <select name="userNombre" class="form-control">
                            <option value="0"  hidden>--Seleccionar--</option>
                            {foreach from = $users item=user}
                                <option>{$user->nombre}</option>
                            {/foreach}
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
                {foreach from = $users item=user}
                    <li class="list-group-item list-group-item-success">{$user->nombre}<button type="button" class="btn btn-danger"> <a href="deleteUser/{$user->id_usuario}">Borrar</a></button></li>              
                {/foreach}
            </ul>
        </div>

        <div class="container">
            <h1 class="titulo">Agregar Producto</h1>
              <form action="insert" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputState">Categorias</label>
                      <select name="categoria" class="form-control">
                        <option id="optionOculto" value="0"  hidden>--Seleccionar--</option>
                        {foreach from = $categorias item=categoria}
                            <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                        {/foreach}
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
                {foreach from = $categorias item=categoria}
                    <li class="list-group-item list-group-item-success">{$categoria->nombre}<button type="button" class="btn btn-danger"> <a href="deleteCategories/{$categoria->id_categoria}">Borrar</a></button><button type="button" class="btn btn-warning"> <a href="editCategories/{$categoria->id_categoria}">Editar</a></button></li>              
                {/foreach}
            </ul>
        </div>

    {/if}    


    <!---------------------->
    <!--------USER--------->
    <!---------------------->
    {if $rol == 'user' || $rol == NULL}    
        
        <div class="container">
            <ul class="list-group">
            <h1 class="titulo">Lista de categorias</h1>
                {foreach from = $categorias item=categoria}
                    <li class="list-group-item list-group-item-success">{$categoria->nombre}</li>              
                {/foreach}
            </ul>
        </div>
  
 
    
    {/if}
  
    {if $rol != 'admin' }
        <div class="container">
            <h1 class="titulo">Filtro por Categorias</h1>
            {foreach from = $categorias item=categoria}
                <button type="button" class="btn btn-danger"><a class="btn-text" href="ordenar/{$categoria->id_categoria}">Filtrar por {$categoria->nombre}</a></button>
            {/foreach}
        </div>  
    {/if}    

	<div class="container">
      	<ul class="list-group">
      		<h1 class="titulo">Listado de productos</h1>

            {if $rol == 'user'}
                {foreach from = $products item=product}
      			   <li class="list-group-item">
                        <p>El producto es {$product->marca}</p>
                        {$product->marca}
                        <img src="{$product->imagen}">
                        <button type="button" class="btn btn-warning">
                            <a href="detalle/{$product->id_producto}">Detalle</a>
                        </button>
                    </li>      		
         	    {/foreach}
                
            {else if $rol == 'admin'}
               {foreach from = $products item=product}
                    <li class="list-group-item">
                        <p>El producto es {$product->nombre}</p>
                        {$product->marca}
                        <img src="{$product->imagen}">
                        <button type="button" class="btn btn-warning"> 
                            <a href="detalle/{$product->id_producto}">Detalle</a>
                        </button>
                        <button type="button" class="btn btn-success"> 
                            <a href="editProducts/{$product->id_producto}">Editar producto</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="delete/{$product->id_producto}">Eliminar</a>
                        </button>

                    </li>
                {/foreach}   
            {else} 

                <!--{$countFilas} viene del controller-->
                {assign var="articulo_por_pagina" value=3}
                {assign var="paginas" value= $countFilas / $articulo_por_pagina }
                {assign var="paginas_total" value=ceil($paginas)}

                {foreach from = $productLimit item=product}
                    <li class="list-group-item list-group-item-success"><p>El producto es {$product->nombre}</p>{$product->marca} <img src="{$product->imagen}"><button type="button" class="btn btn-warning">
                    <a href="detalle/{$product->id_producto}">Detalle</a></button></li>
                {/foreach}
                <nav aria-label= "Paginacion">
                    

                        <div class="paginador">
                            <ul>
                                <li class="page-item {if $smarty.get.pagina <= 1} disabled {else} '' {/if}">
                                    <a class="page-link" href="products?pagina={$smarty.get.pagina-1}">Anterior</a>
                                </li>
                                {for $i=0 to $paginas-1}
                                    <li class="pageSelected page-item {if $smarty.get.pagina == $i+1} active {else} '' {/if} ">
                                        <a class="page-link" href="products?pagina={$i+1}">{$i+1}</a>
                                    </li>
                                {/for}
                                <li class="page-item {if $smarty.get.pagina >= $paginas} disabled {else} '' {/if}">
                                    <a class="page-link" href="products?pagina={$smarty.get.pagina+1}">Siguiente</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            {/if} 

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


{include file="footer.tpl"}		

