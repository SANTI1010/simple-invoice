<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 03:05:03
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\loguearme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fab46cf5910b8_17822862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33d9016327fc0b201aaad16ec3a4ac23204d323' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\loguearme.tpl',
      1 => 1605060300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fab46cf5910b8_17822862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="contenedor">
	<form action="UserLoguedIn" method="post">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
	    <div class="col-sm-10">
	      <input type="text"  class="form-control-plaintext" id="user" name="input_user_log">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass_log">
	    </div>
	  </div>
	  

	  <button class="btn btn-primary"><a class="btn-text">Confirmar</a></button>
	</form>	 
</div>   
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		

<?php }
}
