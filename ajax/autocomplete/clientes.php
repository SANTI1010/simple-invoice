<?php 
	private $db;

		$this->db = new PDO('mysql:host=localhost;'.'dbname=simple_invoice;charset=utf8', 'root', ''); 
		
	


		$sentencia = $this->db->prepare("SELECT * FROM clientes");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_OBJ);

		var_dump($sentencia);
		die();

echo json_encode($sentencia);


}
?>
