<?php

class VistaMember extends Vista{

    function construct(Modelo $modelo) {
        parent::construct($modelo);
    }

    private function index() {
        $datos = $this->getModel()->getDatos();
        $archivo = 'templates/' . $datos['archivo'];
        return Util::renderTemplate($archivo, $datos);
    }

    function render($accion) {
        if(!method_exists(get_class(), $accion)) {
            $accion = 'index';
        }
        return $this->$accion();
    }
}