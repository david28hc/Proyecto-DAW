<?php

class VistaClientes extends Vista{

    function construct(Modelo $modelo) {
        parent::construct($modelo);
    }

    //private function index() {
    //    $datos = $this->getModel()->getDatos();
    //    $archivo = 'templates/' . $datos['archivo'];
    //    return Util::renderTemplate($archivo, $datos);
    //}
    
    private function index() {
        $datos = $this->getModel()->getDatos();
        $archivo = $datos['archivo'];
        //$plantilla = $datos['plantilla'];
        //return Util::renderTemplate('templates/' . $plantilla . '/' . $archivo, $datos);
        return Util::renderTemplate('templates/' . $archivo, $datos);
    }

    function render($accion) {
        if(!method_exists(get_class(), $accion)) {
            $accion = 'index';
        }
        return $this->$accion();
    }
}