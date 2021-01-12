<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewFacturas {	
	function __construct() {		
	}

	function ShowFacturas($facturas){
		$smarty = new Smarty();
		$smarty->assign('facturas', $facturas);
		$smarty->display('templates/facturas.tpl'); 
	}

	function newFactura($vendedores){
		$smarty = new Smarty();
		$smarty->assign('vendedores', $vendedores);
		$smarty->display('templates/newFactura.tpl'); 
	}

	function editFactura($factura,$detalles){
		$smarty = new Smarty();
		$smarty->assign('factura', $factura);
		$smarty->assign('detalles', $detalles);
		$smarty->display('templates/editFactura.tpl'); 

	}
}

?>