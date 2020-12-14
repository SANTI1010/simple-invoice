<?php 
require_once "./View/ViewUser.php";


class ModelUser {
	
	private $db;

	function __construct() {
				$this->view = new ViewUser();

		$this->db = new PDO('mysql:host=localhost;'.'dbname=simple_invoice;charset=utf8', 'root', ''); 
	}	
	

	function GetUser($user){
		$sentencia = $this->db->prepare("SELECT * FROM users WHERE firstname=?");
		$sentencia->execute(array($user));
		return $sentencia->fetch(PDO::FETCH_OBJ);//me lo trae en formato OBJETO
	}


		function getUsers(){
		$sentencia = $this->db->prepare("SELECT * FROM usuarios");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_OBJ);

	}


	function insertUser($user,$pass) {
		$hash = password_hash($pass, PASSWORD_DEFAULT);

		$result = $this->db->prepare("SELECT * FROM usuarios WHERE nombre='$user'");
		$result->execute();

		$data_exists = ($result->fetchColumn() > 0) ? true : false;

		if($data_exists == 1)	{
			$this->view->ShowLogin("El usuario ya existe");
			die();
		} else {
			$sentencia = $this->db->prepare("INSERT INTO usuarios(nombre,password,rol) VALUES (?,?,?)");
			$sentencia->execute(array($user,$hash,'user'));
			return $this->db->lastInsertId();
		}	
	}


	function updatePermits($user,$newRol){
		$sentencia = $this->db->prepare("UPDATE usuarios SET rol=? WHERE nombre=? ");
		$sentencia->execute(array($newRol,$user));
	    return $sentencia->rowCount();
	}

	//Borrar
	function DeleteUser($user_id) {
	    $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=?");
	    $sentencia->execute(array($user_id));
	    return $sentencia->rowCount();//me dice cuantas filas toco
	}



			/*********************/
			/*Registro de usuario*/
			/*********************/
	/*
		$pass = "12345";//viene desde un input
		$hash = password_hash($pass, PASSWORD_DEFAULT);

		$passwordInput = $pass;
		if (password_verify($passwordInput, $hash)) {
			echo "Credenciales validas";
		}else{
			echo "Credenciales invalidas";
		}
	*/

}



?>