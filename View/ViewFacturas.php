<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewFacturas {	
	function __construct() {		
	}

	function ShowFacturas(){
		$smarty = new Smarty();
		$smarty->display('templates/facturas.tpl'); 
	}

	function newFactura(){
		$smarty = new Smarty();
		$smarty->display('templates/newFactura.tpl'); 
	}
}

?>