<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class ViewUser {	
	private $title;
	function __construct() {		
		$this->title = "Login";
	}

	function ShowLogin($message = ""){
		$smarty = new Smarty();
		$smarty->assign('message',$message);
		$smarty->display('templates/login.tpl'); 
	}

	function ShowUsuarios() {
		$smarty = new Smarty();
		$smarty->display('templates/usuarios.tpl'); 
	}


		function ShowLoguearme($message = ""){
		$smarty = new Smarty();
		$smarty->assign('titulo',$this->title);
		$smarty->assign('message',$message);

		$smarty->display('templates/loguearme.tpl'); // muestro el template 		
	}

	function showError($msj){
		$smarty = new Smarty();
		$smarty->assign('msj', $msj);
		$smarty->display('templates/msjError.tpl');
	}
}

?>