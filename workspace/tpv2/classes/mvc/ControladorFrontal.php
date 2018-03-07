<?php
class ControladorFrontal {

    private $controlador;
    private $modelo;
    private $vista;

    function __construct($nombreRuta = null) {
        
        ///echo 'ControladorFrontal<br>';
        
        $nombreRuta = strtolower($nombreRuta);
        
        
        $router = new Enrutador();
        $ruta = $router->getRoute($nombreRuta);
        $nombreModelo = $ruta->getModel();
        $nombreVista = $ruta->getView();
        $nombreControlador = $ruta->getController();
        $this->modelo = new $nombreModelo();
        $this->vista = new $nombreVista($this->modelo);
        $this->controlador = new $nombreControlador($this->modelo);
    }

    function doAction($accion = null) {
        //echo 'empiezo a ejecutar la accion <br>';
        $accion = strtolower($accion);
        if (method_exists($this->controlador, $accion)) {
            //echo 'la accion existe <br>';
            $this->controlador->$accion();
        } else {
            //echo 'la accion no existe <br>';
            $this->controlador->index();
        }
    }
    
    function doOutput($accion = null) {
        //echo 'empieza el output <br>';
        return $this->vista->render($accion);
    }

}