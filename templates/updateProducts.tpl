{include file="header.tpl"}
			<div class="container">
		      <form action="updateProducts/{$id}" method="post" enctype="multipart/form-data">
		          <div class="form-group">
		          	<label for="inputState">Categorias</label>
				      <select name="categoria" class="form-control">
					    {foreach from = $categorias item=categoria}
						    <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
						{/foreach}
				      </select>
		            <label for="marca">Marca</label>
		            <input class="form-control" id="marca" value="{$product->marca}" name="update_marca" aria-describedby="emailHelp">		         
		          </div>
		          <div class="form-group">
		            <label for="description">Talle</label>
		            <input class="form-control" id="description" value="{$product->talle}" name="update_talle">
		          </div>
		          <div class="form-group">
		              <label for="priority">Precio</label>
		              <input class="form-control" id="priority" value="{$product->precio}" name="update_precio">
		            </div>

		            <div class="form-group">
		            	<img src="{$product->imagen}">
		            </div>
		           <input type="hidden" name="previous_img" value="{$product->imagen}"> 
		           <input type="file" name="update_img" id="img_product"> 
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>

		        <a href="volver">Volver</a>
		    </div>

{include file="footer.tpl"}		