<?php 
require_once "./View/ViewFacturas.php";


class ModelFacturas {
	
	private $db;

	function __construct() {
		$this->view = new ViewFacturas();
		$this->db = new PDO('mysql:host=localhost;'.'dbname=simple_invoice;charset=utf8', 'root', ''); 
	}	
	

	function GetFactura($user){
		$sentencia = $this->db->prepare("SELECT * FROM users WHERE user_name=?");
		$sentencia->execute(array($user));
		return $sentencia->fetch(PDO::FETCH_OBJ);//me lo trae en formato OBJETO
	}


		function getFacturas(){
		$sentencia = $this->db->prepare("SELECT * FROM facturas INNER JOIN clientes ON facturas.id_cliente = clientes.id_cliente INNER JOIN users WHERE facturas.id_vendedor = users.user_id");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_OBJ);

	}




}



?>