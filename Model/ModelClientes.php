<?php 
require_once "./View/ViewFacturas.php";

class ModelClientes {
	
	private $db;

	function __construct() {
		$this->view = new ViewFacturas();
		$this->db = new PDO('mysql:host=localhost;'.'dbname=simple_invoice;charset=utf8', 'root', ''); 
	}	
	

	function getClientes(){
		$sentencia = $this->db->prepare("SELECT * FROM clientes");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_OBJ);
	}

}

?>