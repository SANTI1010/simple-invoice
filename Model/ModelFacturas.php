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

	function getFacturaById($id) {
		$sentencia = $this->db->prepare("SELECT * FROM facturas INNER JOIN clientes ON facturas.id_cliente = clientes.id_cliente INNER JOIN users WHERE facturas.id_vendedor = users.user_id AND id_factura=?");
		$sentencia->execute(array($id));
		return $sentencia->fetch(PDO::FETCH_OBJ);
	}


	function getDetalleFactura($id) {
		$sentencia = $this->db->prepare("SELECT * from products, facturas, detalle_factura WHERE facturas.numero_factura=detalle_factura.numero_factura AND facturas.id_factura=? AND products.id_producto=detalle_factura.id_producto");
		$sentencia->execute(array($id));
		return $sentencia->fetchAll(PDO::FETCH_OBJ);
	}

	function getFacturaFiltrados($busqueda) {
		$buscar = "%" . $busqueda . "%";
        $sentencia = $this->db->prepare("SELECT * FROM facturas JOIN clientes ON facturas.id_cliente = clientes.id_cliente WHERE clientes.nombre_cliente LIKE ? && clientes.id_cliente = facturas.id_cliente ORDER BY nombre_cliente ASC");
        $sentencia->execute(array($buscar));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
	}



}



?>