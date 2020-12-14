<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewClientes {	
	function __construct() {		
	}

	function ShowClientes(){
		$smarty = new Smarty();
		$smarty->display('templates/clientes.tpl'); 
	}

	function newCliente(){
		$smarty = new Smarty();
		$smarty->display('templates/newCliente.tpl'); 
	}
}

?>