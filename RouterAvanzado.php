<?php 
	require_once('Controller/ControllerUser.php');
	require_once('Controller/ControllerFacturas.php');
	require_once('Controller/ControllerProductos.php');

	require_once('RouterClass.php');

	//Constantes para ruteo
	define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
	define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
	define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
	define("LOGUEARME", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/loguearme');


	$r = new Router();

	//Login
	$r->addRoute("login","GET","ControllerUser","ShowLogin");
	$r->addRoute("verifyUser","POST","ControllerUser","VerifyUser");


	//Factura
	$r->addRoute("facturas","GET","ControllerFacturas","Facturas");
	$r->addRoute("newFactura","GET","ControllerFacturas","NewFactura");


	//Productos
	$r->addRoute("productos","GET","ControllerProductos","Productos");
	$r->addRoute("newProducto","GET","ControllerProductos","NewProducto");


	//volver
	$r->addRoute("volver","GET","ProductsController","volver");



	//Ruta por defecto
	$r->setDefaultRoute("ControllerUser","ShowLogin");

	//run
	$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);



?>