<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-14 23:22:44
  from 'C:\xampp\htdocs\simple-invoice-master\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd7e5b4c04693_16879184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae8888bd37bb7bec9b211faa8f24f66b9a7e662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\templates\\navbar.tpl',
      1 => 1607984323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7e5b4c04693_16879184 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Simple Invoice</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo '<?php ';?>
echo $active_facturas;<?php echo '?>';?>
"><a href="facturas"><i class='glyphicon glyphicon-list-alt'></i> Facturas <span class="sr-only">(current)</span></a></li>
        <li class="<?php echo '<?php ';?>
echo $active_productos;<?php echo '?>';?>
"><a href="productos"><i class='glyphicon glyphicon-barcode'></i> Productos</a></li>
		<li class="<?php echo '<?php ';?>
echo $active_clientes;<?php echo '?>';?>
"><a href="clientes"><i class='glyphicon glyphicon-user'></i> Clientes</a></li>
		<li class="<?php echo '<?php ';?>
echo $active_usuarios;<?php echo '?>';?>
"><a href="usuarios"><i  class='glyphicon glyphicon-lock'></i> Usuarios</a></li>
	
    <!-- Deberias preguntar si el perfil esta activo -->

  	<li><a href="perfil"><i  class='glyphicon glyphicon-cog'></i> Configuración</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://obedalvarado.pw/contacto/" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Soporte</a></li>
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php echo '<?php
		';?>
}
	<?php echo '?>';
}
}
