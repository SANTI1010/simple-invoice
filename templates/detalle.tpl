{include file="header.tpl"}

	<div class="container col-md-7" >
		<div class="row">
			<div class="col-md-6">
			  	<ul class="list-group">
			  		
			      		<li class="list-group-item list-group-item-success">La categoria es: {$detalle->nombre}</li>
			      		<li class="list-group-item list-group-item-success">La marca es: {$detalle->marca}</li>
			      		<li class="list-group-item list-group-item-success">El talle es: {$detalle->talle}</li>
			      		<li class="list-group-item list-group-item-success">El precio es: ${$detalle->precio}</li>
			      		<li class="list-group-item list-group-item-success"><img src="{$detalle->imagen}"></li>
			 	</ul>
		 	</div>

		 	<input id="id_product_hidden" type="hidden" value="{$detalle->id_producto}">
		 	<input id="id_user_hidden" type="hidden" value="{$id_user}">
		 	<input id="rol_user_hidden" type="hidden" value="{$rol_user}">

		 	<div class="col-md-6">
				{include file="vue/comment.vue"}
			</div>

		 	<a href="volver">Volver</a>
		</div> 	
	</div>

<script src="js/comments.js"></script>
{include file="footer.tpl"}	

