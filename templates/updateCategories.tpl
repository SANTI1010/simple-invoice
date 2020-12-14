{include file="header.tpl"}
	
			<div class="container">
		      <form action="updateCategories/{$categorie->id_categoria}" method="post">
		          <div class="form-group">
		            <label for="description">Nombre</label>
		            <input class="form-control" id="description" value="{$categorie->nombre}" name="update_nombre">
		          </div>
		          
		          <button type="submit" class="btn btn-primary">Agregar</button>
		        </form>
		        <a href="volver">Volver</a>
		    </div>

{include file="footer.tpl"}		