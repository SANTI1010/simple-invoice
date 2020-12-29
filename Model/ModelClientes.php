<?php 

$conexion = new mysqli("localhost","root","","simple_invoice");
$cliente = $_GET['q'];


$resultado = $conexion->query("SELECT * FROM clientes WHERE nombre_cliente LIKE '%$cliente%'");

$datos = array();

while($row = $resultado->fetch_asocc()){
	$datos[] = $row['nombre_cliente'];
}

echo json_encode($datos);

