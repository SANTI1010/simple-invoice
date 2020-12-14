<?php

require_once "./View/ViewPerfil.php";
//require_once "./Model/ModelFacturas.php";
require_once "./Helpers/Helper.php";



class ControllerPerfil {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new ViewPerfil();
        $this->authHelper = new Helper();
      //  $this->model = new ModelFacturas();
       
    }

    public function Perfil() {
        $this->authHelper->checkLoggedIn();
        $this->view->ShowPerfil();
    }


}
