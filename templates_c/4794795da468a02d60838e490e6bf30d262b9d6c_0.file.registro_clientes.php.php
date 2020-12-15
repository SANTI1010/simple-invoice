<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 16:43:32
  from 'C:\xampp\htdocs\simple-invoice-master\modal\registro_clientes.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8d9a4d75253_25687468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4794795da468a02d60838e490e6bf30d262b9d6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\modal\\registro_clientes.php',
      1 => 1478810646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8d9a4d75253_25687468 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php echo '<?php
		';?>
if (isset($con))
		{
	<?php echo '?>';?>

	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo cliente</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="telefono" name="telefono" >
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" >
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="direccion" class="col-sm-3 control-label">Dirección</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="direccion" name="direccion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php echo '<?php
		';?>
}
	<?php echo '?>';
}
}
