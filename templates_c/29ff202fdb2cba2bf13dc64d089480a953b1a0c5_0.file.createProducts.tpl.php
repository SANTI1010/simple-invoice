<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 21:22:16
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\createProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd6b78172da0_63922140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ff202fdb2cba2bf13dc64d089480a953b1a0c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\createProducts.tpl',
      1 => 1606249313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd6b78172da0_63922140 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<form id="form-product" action="insert" method="post">
    <div class="form-group">
        <label for="title">Marca</label>
        <input class="form-control" id="title" name="input_marca" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="description">Talle</label>
        <input class="form-control" id="description" name="input_talle">
    </div>
    <div class="form-group">
        <label for="priority">Precio</label>
        <input type="number" class="form-control" id="priority"  name="input_precio">
        </div>
        <div class="form-group">
        <label for="priority">Categoria</label>
        <input type="number" class="form-control" id="priority"  name="input_categoria">
        </div>    
        
    <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div><?php }
}
