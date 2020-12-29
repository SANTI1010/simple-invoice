<?php

require_once "./View/ViewClientes.php";
//require_once "./Model/ModelFacturas.php";
require_once "./Helpers/Helper.php";



class ControllerClientes {
    
    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new ViewClientes();
        $this->authHelper = new Helper();
      //  $this->model = new ModelFacturas();
       
    }


    public function Clientes() {
        $this->authHelper->checkLoggedIn();
        $this->view->ShowClientes();
    }

    public function NewCliente() {
        $this->authHelper->checkLoggedIn();  
        $this->view->newCliente(); 
    }

}
