<?php

require_once "./View/ViewFacturas.php";
require_once "./Model/ModelFacturas.php";
require_once "./Helpers/Helper.php";



class ControllerFacturas {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new ViewFacturas();
        $this->authHelper = new Helper();
        $this->model = new ModelFacturas();
       
    }


    public function Facturas() {
        $this->authHelper->checkLoggedIn();
        $facturas = $this->model->getFacturas();
        
        if(isset($facturas)){
           $this->view->ShowFacturas($facturas);
        } else {
            $this->view->ShowError("Algo salio mal");
        }
    }

    public function NewFactura() {
        $this->authHelper->checkLoggedIn();  
        $this->view->newFactura(); 
    }

}
