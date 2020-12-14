<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewFacturas {	
	function __construct() {		
	}

	function ShowFacturas(){
		$smarty = new Smarty();
		//$smarty->assign('titulo',$this->title);
		$smarty->display('templates/facturas.tpl'); 
	}
}

?>