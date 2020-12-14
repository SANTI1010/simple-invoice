<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 13:19:50
  from 'C:\xampp\htdocs\web2\TPE_WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc634e63202b2_08787389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a77f1fd35d1bf27edc73266aed8599d5861eaa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_WEB2\\templates\\header.tpl',
      1 => 1606825162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc634e63202b2_08787389 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <title>Voley en Casa</title>
    <link rel="stylesheet" href="css/normalize.css"> <!--Saca los estilos del navegador por defecto-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/responsive.js"><?php echo '</script'; ?>
>
</head>

	<header class="barra contenedor">
		<div class="encabezado">
				<img src="img/logo.jpg" alt="Logo página">
			<ul class="navegador">
				<li><a href="index.html">Inicio</a></li>
				<li><a target="_blank" href="rodilleras.html">Rodilleras</a></li>
				<li><a target="_blank" href="mangas.html">Mangas</a></li>
			</ul>
			<div class="btn_menu">
				<a href="#">MENÚ</a>
			</div>
		</div>
		<ul class="navegador_mobil">
				<li><a href="index.html">Inicio</a></li>
				<li><a target="_blank" href="rodilleras.html">Rodilleras</a></li>
				<li><a target="_blank" href="mangas.html">Mangas</a></li>
		</ul>
	</header>


<body>
<?php }
}
