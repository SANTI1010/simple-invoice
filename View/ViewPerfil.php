<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewPerfil {	
	function __construct() {		
	}

	function ShowPerfil(){
		$smarty = new Smarty();
		$smarty->display('templates/perfil.tpl'); 
	}

}

?>