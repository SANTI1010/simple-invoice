{literal}

<div id="vue-facturas">
	<input type="hidden" v-model="rol_user">

	<ul id="comment-list" class="list-group" >
		<li v-for="comment in comments"
		 class="list-group-item">

		 <p>El comentario lo realizo <span class="badge badge-success">{{comment.nombre}}</span></p>

		 <p>{{comment.comentario}}</p>

			<div v-if="comment.puntaje == 1">
				<label classs="stars_select" for="radio1">★</label>
			</div>
			<div v-else-if="comment.puntaje == 2">
				<label classs="stars_select" for="radio1">★★</label>
			</div>	
			<div v-else-if="comment.puntaje == 3">
				<label classs="stars_select" for="radio1">★★★</label>
			</div>
			<div v-else-if="comment.puntaje == 4">
				<label classs="stars_select" for="radio1">★★★★</label>
			</div>
			<div v-else-if="comment.puntaje == 5">
				<label classs="stars_select" for="radio1">★★★★★</label>
			</div>
			<div v-if="rol_user == 'admin' ">	
					<a @click="deleteComment(comment.id_comentario)">
						<button class="btn btn-danger">Eliminar</button>
					</a>
			</div>		
		</li>
	</ul>

	<div v-if="rol_user == 'user'">	
		<div class="col-md-12">
			<p>Comentarios</p>
			<form id="form-comment" action="insertComment" method="post">
				<input type="text" id="newComment" placeholder="Escribir nuevo comentario">

				<p class="clasificacion">
				    <input id="radio1" type="radio" name="estrellas" value="5">
				    <label classs="stars" for="radio1">★</label>
				    <input id="radio2" type="radio" name="estrellas" value="4">
				    <label classs="stars" for="radio2">★</label>
				    <input id="radio3" type="radio" name="estrellas" value="3">
				    <label classs="stars" for="radio3">★</label>
				    <input id="radio4" type="radio" name="estrellas" value="2">
				    <label classs="stars" for="radio4">★</label>
				    <input id="radio5" type="radio" name="estrellas" value="1">
				    <label classs="stars" for="radio5">★</label>
				</p>

			<button class="btn btn-primary editComment">Enviar comentario</button>
			</form>	  
		</div>
	</div>	

</div>

{/literal}