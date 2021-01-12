<title>Facturas</title>
	{include file="header.tpl"}
	{include file="navbar.tpl"}


    <div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
			    <div class="btn-group pull-right">
					<a  href="newFactura" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>
				</div>
				<h4><i class='glyphicon glyphicon-search'></i> Buscar Facturas</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="buscar" role="form" id="s">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente o # de factura</label>
							<div class="col-md-5">
								<input type="text" class="form-control" name="busqueda" placeholder="Nombre del cliente o # de factura">
							</div>
							
							<div class="col-md-3">
								<button type="submit" class="btn btn-default">
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
								<button type="submit" class="btn btn-default">
									<span class="glyphicon glyphicon-trash" ></span> Limpiar</button>
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
                {foreach from = $facturas item=factura}
                <tr>
					<td>{$factura->numero_factura}</td>
					<td>{$factura->fecha_factura}</td>
					<td>
						<a href="#" data-toggle="tooltip" data-placement="top" 
							title="<i class='glyphicon glyphicon-phone'>{$factura->telefono_cliente}</i> <br><i class='glyphicon glyphicon-envelope'>{$factura->email_cliente}</i>" >
							{$factura->nombre_cliente}
						</a>
					</td>
					<td>{$factura->firstname} {$factura->lastname}</td>
					<td>

						<span class="label {if $factura->estado_factura == 1} label-success {else} label-warning {/if}>">
							{if $factura->estado_factura == 1} Pagada {else} Pendiente {/if}
						</span>
					</td>
					<td class='text-right'>{$factura->total_venta}</td>					
					<td class="text-right">
						<a href="editFactura/{$factura->id_factura}" class='btn btn-default' title='Editar factura' >
							<i class="glyphicon glyphicon-edit"></i>
						</a> 
						<a href="#" class='btn btn-default' title='Descargar factura' onclick="imprimir_factura('<?php echo $id_factura;?>');">
							<i class="glyphicon glyphicon-download"></i>
						</a> 
						<a href="#" class='btn btn-default' title='Borrar factura' onclick="eliminar('<?php echo $numero_factura; ?>')">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
						
				</tr>
                {/foreach}
            </ul>
            </table>
        </div>
				<!-- Carga los datos ajax <div id="resultados"></div> -->
				<!--<div class='outer_div'></div> Carga los datos ajax -->
			</div>
		</div>	
	</div> 

{include file="footer.tpl"}
