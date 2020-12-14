<?php

require_once "./View/ViewProductos.php";
//require_once "./Model/ModelFacturas.php";
require_once "./Helpers/Helper.php";



class ControllerProductos {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new ViewProductos();
        $this->authHelper = new Helper();
      //  $this->model = new ModelFacturas();
       
    }


    public function Productos() {
        $this->authHelper->checkLoggedIn();
        $this->view->ShowProductos();
    }

    public function NewProducto() {
        $this->authHelper->checkLoggedIn();  
        $this->view->newProducto(); 
    }

}
