<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 00:47:01
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\vue\comment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcaca752cd848_31911950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb0472b1fffa73537beafffabe1422d0b3e7489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\vue\\comment.vue',
      1 => 1607125598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcaca752cd848_31911950 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="vue-comment">
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

<?php }
}
