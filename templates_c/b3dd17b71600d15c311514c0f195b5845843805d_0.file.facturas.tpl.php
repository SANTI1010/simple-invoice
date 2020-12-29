<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-29 13:53:24
  from 'C:\xampp\htdocs\simple-invoice-master\templates\facturas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feb26c4cd8c69_27112716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3dd17b71600d15c311514c0f195b5845843805d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\templates\\facturas.tpl',
      1 => 1609245453,
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
function content_5feb26c4cd8c69_27112716 (Smarty_Internal_Template $_smarty_tpl) {
?><title>Facturas</title>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
			    <div class="btn-group pull-right">
					<a  href="newFactura" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>
				</div>
				<h4><i class='glyphicon glyphicon-search'></i> Buscar Facturas</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente o # de factura</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente o # de factura" onkeyup='load(1);'>
							</div>
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
						</div>				
			</form>

			<table class="table">
				<tr  class="info">
					<th>#</th>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Vendedor</th>
					<th>Estado</th>
					<th class='text-right'>Total</th>
					<th class='text-right'>Acciones</th>
				</tr>

				
            <ul class="list-group">
            	<div class="table-responsive">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facturas']->value, 'factura');
$_smarty_tpl->tpl_vars['factura']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['factura']->value) {
$_smarty_tpl->tpl_vars['factura']->do_else = false;
?>
                <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['factura']->value->numero_factura;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['factura']->value->fecha_factura;?>
</td>
					<td>
						<a href="#" data-toggle="tooltip" data-placement="top" 
							title="<i class='glyphicon glyphicon-phone'><?php echo $_smarty_tpl->tpl_vars['factura']->value->telefono_cliente;?>
</i> <br><i class='glyphicon glyphicon-envelope'><?php echo $_smarty_tpl->tpl_vars['factura']->value->email_cliente;?>
</i>" >
							<?php echo $_smarty_tpl->tpl_vars['factura']->value->nombre_cliente;?>

						</a>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['factura']->value->firstname;?>
</td>
					<td>

						<span class="label <?php if ($_smarty_tpl->tpl_vars['factura']->value->estado_factura == 1) {?> label-success <?php } else { ?> label-warning <?php }?>>">
							<?php if ($_smarty_tpl->tpl_vars['factura']->value->estado_factura == 1) {?> Pagada <?php } else { ?> Pendiente <?php }?>
						</span>
					</td>
					<td class='text-right'><?php echo $_smarty_tpl->tpl_vars['factura']->value->total_venta;?>
</td>					
					<td class="text-right">
						<a href="editFactura/<?php echo $_smarty_tpl->tpl_vars['factura']->value->id_factura;?>
" class='btn btn-default' title='Editar factura' >
							<i class="glyphicon glyphicon-edit"></i>
						</a> 
						<a href="#" class='btn btn-default' title='Descargar factura' onclick="imprimir_factura('<?php echo '<?php ';?>
echo $id_factura;<?php echo '?>';?>
');">
							<i class="glyphicon glyphicon-download"></i>
						</a> 
						<a href="#" class='btn btn-default' title='Borrar factura' onclick="eliminar('<?php echo '<?php ';?>
echo $numero_factura; <?php echo '?>';?>
')">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
						
				</tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </table>
        </div>
				<!-- Carga los datos ajax <div id="resultados"></div> -->
				<!--<div class='outer_div'></div> Carga los datos ajax -->
			</div>
		</div>	
	</div> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
