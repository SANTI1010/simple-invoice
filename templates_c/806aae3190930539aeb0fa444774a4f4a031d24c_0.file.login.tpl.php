<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 14:24:56
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fba66a83c60d0_21311422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806aae3190930539aeb0fa444774a4f4a031d24c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\login.tpl',
      1 => 1606051473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fba66a83c60d0_21311422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
	<div class="alert alert-danger" role="alert">
	  	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</div>	
<?php }?>


<div class="contenedor">
	<form action="verifyUser" method="post">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
	    <div class="col-sm-10">
	      <input type="text"  class="form-control-plaintext" id="user" name="input_user">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary">Ingresar</button>

	  <button class="btn btn-secondary"><a class="btn-text" href="loguearme/">Registrarme</a></button>
	</form>	 
</div>   
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
