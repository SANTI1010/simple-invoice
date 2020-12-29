{include file="header.tpl"}
{include file="navbar.tpl"}

    <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-edit'></i> Nueva Factura</h4>
		</div>
		<div class="panel-body">
			{include file = "modal/buscar_productos.tpl"}
			{include file = "modal/registro_clientes.php"}
			{include file = "modal/registro_productos.php"}

			<form class="form-horizontal" role="form" id="datos_factura">
				<div class="form-group row">
				  <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
				  <div class="col-md-3">
					  <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
					  <input id="id_cliente" type='hidden'>	
				  </div>
				  <label for="tel1" class="col-md-1 control-label">Teléfono</label>
							<div class="col-md-2">
								<input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
							</div>
					<label for="mail" class="col-md-1 control-label">Email</label>
							<div class="col-md-3">
								<input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
							</div>
				 </div>
						<div class="form-group row">
							<label for="empresa" class="col-md-1 control-label">Vendedor</label>
							<div class="col-md-3">
								<select class="form-control input-sm" id="id_vendedor">
									  {foreach from = $vendedores item=vendedor}
                            			<option>{$vendedor->firstname}</option>
                       				 {/foreach}
								</select>
							</div>
							<label for="tel2" class="col-md-1 control-label">Fecha</label>
							<div class="col-md-2">
								<input type="text" class="form-control input-sm" id="fecha" value= '{$smarty.now|date_format:"%d/%m/%Y"}' readonly>
							</div>
							<label for="email" class="col-md-1 control-label">Pago</label>
							<div class="col-md-3">
								<select class='form-control input-sm' id="condiciones">
									<option value="1">Efectivo</option>
									<option value="2">Cheque</option>
									<option value="3">Transferencia bancaria</option>
									<option value="4">Crédito</option>
								</select>
							</div>
						</div>
				
				
				<div class="col-md-12">
					<div class="pull-right">
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
						 <span class="glyphicon glyphicon-plus"></span> Nuevo producto
						</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
						 <span class="glyphicon glyphicon-user"></span> Nuevo cliente
						</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
						 <span class="glyphicon glyphicon-search"></span> Agregar productos
						</button>
						<button type="submit" class="btn btn-default">
						  <span class="glyphicon glyphicon-print"></span> Imprimir
						</button>
					</div>	
				</div>
			</form>	
			
		<div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->			
		</div>
	</div>		
		  <div class="row-fluid">
			<div class="col-md-12">
			
	

			
			</div>	
		 </div>
	</div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--  <script src="js/facturas.js"></script>-->
	<script src="js/invoice.js"></script>
	{include file="footer.tpl"}
	