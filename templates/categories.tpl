{include file="header.tpl"}

	<div class="container">

  	<ul class="list-group">
      	{foreach from = $categories item=categorie}

      			<li class="list-group-item list-group-item-success" >{$categorie->marca} <button type="button" class="btn btn-info" >$ {$categorie->precio}</button> {$categorie->talle}</li>
      		
     	{/foreach}
 	</ul>

 	 	 <a href="volver">Volver</a>
	</div>

{include file="footer.tpl"}		

