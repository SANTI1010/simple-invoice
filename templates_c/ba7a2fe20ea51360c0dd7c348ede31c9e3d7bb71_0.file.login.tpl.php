<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-22 13:34:37
  from 'C:\xampp\htdocs\simple-invoice-master\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe1e7dda380a6_70643692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7a2fe20ea51360c0dd7c348ede31c9e3d7bb71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simple-invoice-master\\templates\\login.tpl',
      1 => 1608639227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5fe1e7dda380a6_70643692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form action="verifyUser" method="post" name="loginform"class="form-signin">
			
	                <span id="reauth-email" class="reauth-email"></span>
	                <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
	                <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
	                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
 
<?php }
}
