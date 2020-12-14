<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewProductos {	
	function __construct() {		
	}

	function ShowProductos(){
		$smarty = new Smarty();
		$smarty->display('templates/productos.tpl'); 
	}

	function newProducto(){
		$smarty = new Smarty();
		$smarty->display('templates/newProducto.tpl'); 
	}
}

?>