<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-14 23:05:34
  from 'C:\xampp\htdocs\simple-invoice-master\templates\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd7e1aeae3ac8_66984936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0de9a0fdeee0b9ec4c0fe6ed1ac1051f37a9188' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\templates\\clientes.tpl',
      1 => 1607983386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5fd7e1aeae3ac8_66984936 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoCliente"><span class="glyphicon glyphicon-plus" ></span> Nuevo Cliente</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Clientes</h4>
		</div>
		<div class="panel-body">
		
			
			
			<?php echo '<?php
				';?>
include("modal/registro_clientes.php");
				include("modal/editar_clientes.php");
			<?php echo '?>';?>

			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente" onkeyup='load(1);'>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			
		
	
			
			
			
  </div>
</div>
		 
	</div>
	<hr>
	<?php echo '<?php
	';?>
include("footer.php");
	<?php echo '?>';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="js/clientes.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
