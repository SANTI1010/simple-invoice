<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-29 19:11:59
  from 'C:\xampp\htdocs\simple-invoice-master\templates\editFactura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feb716f8a0fa1_77283167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0dbfd17670f7182e236ad0206e512df517d6484' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\templates\\editFactura.tpl',
      1 => 1609265516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5feb716f8a0fa1_77283167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	 
    <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-edit'></i> Editar Factura</h4>
		</div>
		<div class="panel-body">
		<?php echo '<?php 
			';?>
include("modal/buscar_productos.php");
			include("modal/registro_clientes.php");
			include("modal/registro_productos.php");
		<?php echo '?>';?>

			<form class="form-horizontal" role="form" id="datos_factura">
				<div class="form-group row">

				  <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
				  <div class="col-md-3">
					  <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['factura']->value->nombre_cliente;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
					  <input id="id_cliente" name="id_cliente" type='hidden' value="<?php echo '<?php ';?>
echo $id_cliente;<?php echo '?>';?>
">	
				  </div>
				  <label for="tel1" class="col-md-1 control-label">Teléfono</label>
							<div class="col-md-2">
								<input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['factura']->value->telefono_cliente;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" readonly>
							</div>
					<label for="mail" class="col-md-1 control-label">Email</label>
							<div class="col-md-3">
								<input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['factura']->value->email_cliente;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
">
							</div>
				 </div>
						<div class="form-group row">
							<label for="empresa" class="col-md-1 control-label">Vendedor</label>
							<div class="col-md-3">
								<select class="form-control input-sm" id="id_vendedor" name="id_vendedor">
									<?php echo '<?php
										';?>
$sql_vendedor=mysqli_query($con,"select * from users order by lastname");
										while ($rw=mysqli_fetch_array($sql_vendedor)){
											$id_vendedor=$rw["user_id"];
											$nombre_vendedor=$rw["firstname"]." ".$rw["lastname"];
											if ($id_vendedor==$id_vendedor_db){
												$selected="selected";
											} else {
												$selected="";
											}
											<?php echo '?>';?>

											<option value="<?php echo '<?php ';?>
echo $id_vendedor<?php echo '?>';?>
" <?php echo '<?php ';?>
echo $selected;<?php echo '?>';?>
><?php echo '<?php ';?>
echo $nombre_vendedor<?php echo '?>';?>
</option>
											<?php echo '<?php
										';?>
}
									<?php echo '?>';?>

								</select>
							</div>
							<label for="tel2" class="col-md-1 control-label">Fecha</label>
							<div class="col-md-2">
								<input type="text" class="form-control input-sm" id="fecha" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['factura']->value->fecha_factura;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" readonly>
							</div>
							<label for="email" class="col-md-1 control-label">Pago</label>
							<div class="col-md-2">
								<select class='form-control input-sm ' id="condiciones" name="condiciones">
									<option value="1" >Efectivo</option>
									<option value="2" >Cheque</option>
									<option value="3" >Transferencia bancaria</option>
									<option value="4" >Crédito</option>
								</select>
							</div>
							<div class="col-md-2">
								<select class='form-control input-sm ' id="estado_factura" name="estado_factura">
									<option value="1" >Pagado</option>
									<option value="2" >Pendiente</option>
								</select>
							</div>
						</div>
				
				<div class="col-md-12">
					<div class="pull-right">
						<button type="submit" class="btn btn-default">
						  <span class="glyphicon glyphicon-refresh"></span> Actualizar datos
						</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
						 <span class="glyphicon glyphicon-plus"></span> Nuevo producto
						</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
						 <span class="glyphicon glyphicon-user"></span> Nuevo cliente
						</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
						 <span class="glyphicon glyphicon-search"></span> Agregar productos
						</button>
						<button type="button" class="btn btn-default" onclick="imprimir_factura('<?php echo '<?php ';?>
echo $id_factura;<?php echo '?>';?>
')">
						  <span class="glyphicon glyphicon-print"></span> Imprimir
						</button>
					</div>	
				</div>
			</form>	
			<div class="clearfix"></div>
				<div class="editar_factura" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->	
			
		<div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->			
			
		</div>
	</div>		
		 


	<table class="table">
<tr>
	<th class='text-center'>CODIGO</th>
	<th class='text-center'>CANT.</th>
	<th>DESCRIPCION</th>
	<th class='text-right'>PRECIO UNIT.</th>
	<th class='text-right'>PRECIO TOTAL</th>
	<th></th>
</tr>

		<tr>
			<td class='text-center'><?php echo '<?php ';?>
echo $codigo_producto;<?php echo '?>';?>
</td>
			<td class='text-center'><?php echo '<?php ';?>
echo $cantidad;<?php echo '?>';?>
</td>
			<td><?php echo '<?php ';?>
echo $nombre_producto;<?php echo '?>';?>
</td>
			<td class='text-right'><?php echo '<?php ';?>
echo $precio_venta_f;<?php echo '?>';?>
</td>
			<td class='text-right'><?php echo '<?php ';?>
echo $precio_total_f;<?php echo '?>';?>
</td>
			<td class='text-center'><a href="#" onclick="eliminar('<?php echo '<?php ';?>
echo $id_tmp <?php echo '?>';?>
')"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>		
		<?php echo '<?php
	';?>
}
	$impuesto=get_row('perfil','impuesto', 'id_perfil', 1);
	$subtotal=number_format($sumador_total,2,'.','');
	$total_iva=($subtotal * $impuesto )/100;
	$total_iva=number_format($total_iva,2,'.','');
	$total_factura=$subtotal+$total_iva;

<?php echo '?>';?>

<tr>
	<td class='text-right' colspan=4>SUBTOTAL <?php echo '<?php ';?>
echo $simbolo_moneda;<?php echo '?>';?>
</td>
	<td class='text-right'><?php echo '<?php ';?>
echo number_format($subtotal,2);<?php echo '?>';?>
</td>
	<td></td>
</tr>
<tr>
	<td class='text-right' colspan=4>IVA (<?php echo '<?php ';?>
echo $impuesto;<?php echo '?>';?>
)% <?php echo '<?php ';?>
echo $simbolo_moneda;<?php echo '?>';?>
</td>
	<td class='text-right'><?php echo '<?php ';?>
echo number_format($total_iva,2);<?php echo '?>';?>
</td>
	<td></td>
</tr>
<tr>
	<td class='text-right' colspan=4>TOTAL <?php echo '<?php ';?>
echo $simbolo_moneda;<?php echo '?>';?>
</td>
	<td class='text-right'><?php echo '<?php ';?>
echo number_format($total_factura,2);<?php echo '?>';?>
</td>
	<td></td>
</tr>

</table>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
