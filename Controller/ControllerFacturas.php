<?php

require_once "./View/ViewFacturas.php";
require_once "./Model/ModelFacturas.php";
require_once "./Model/ModelUser.php";
require_once "./Helpers/Helper.php";



class ControllerFacturas {

    private $view;
    private $model;
    private $ModelUser;
    private $authHelper;

    public function __construct() {
        $this->view = new ViewFacturas();
        $this->authHelper = new Helper();
        $this->model = new ModelFacturas();
        $this->modelUser = new ModelUser();
       
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
        //vendedores son los usuarios
        $vendedores = $this->modelUser->getUsers();
        if(isset($vendedores)){
            $this->view->newFactura($vendedores);     
        } else {
            $this->view->ShowError("Algo salio mal");   
        }        
    }


        public function EditFactura($params = null) {
        $this->authHelper->checkLoggedIn();
        $id_factura = $params[':ID'];
        
        if(isset($id_factura) && $id_factura != ""){
            $factura = $this->model->getFacturaById($id_factura);
            $detalleFactura = $this->model->getDetalleFactura($id_factura);
            if (isset($factura)) {
                $this->view->editFactura($factura,$detalleFactura);
            }
        } else {
           $this->view->showError("La factura no existe");

        }     
        
    }


    function Buscar() {
        if (isset($_GET["busqueda"])) {
            $busqueda = $_GET["busqueda"];
            $productos = $this->model->getFacturaFiltrados($busqueda);
            if (empty($productos)) {
                //ver
            }
          //  $this->view->showHome($productos, $busqueda, $marcas, $this->user, $this->logueado, $this->admin);
        }
    }



}
