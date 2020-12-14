<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 19:42:33
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\permisos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac3099c55f51_01470520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59679ce0708eb97868d10fb7d15c31bd815e4b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\permisos.tpl',
      1 => 1605120149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fac3099c55f51_01470520 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
		<h1>Dar permisos</h1>

		<table class="table table-hover table-dark">
			<thead>
			    <tr>
			      <th scope="col">Usuario</th>
			      <th scope="col">Permiso</th>
			    </tr>
		  	</thead>
	  		<tbody>
			    <tr>
			      	<td>Nombre usuario</td>
			     	<td>
						<div class="form-check-inline">
				  			<label class="col-md-12 form-check-inline">
				    			<input type="radio" class="form-check-input" name="optradio">Admin
				  			</label>
						</div>
						<div class="form-check-inline">
				  			<label class="col-md-12 form-check-inline">
				    			<input type="radio" class="form-check-input" name="optradio">User
				  			</label>
						</div>
			    	</td>
			    </tr>
	  		</tbody>
		</table>
	</div><?php }
}
