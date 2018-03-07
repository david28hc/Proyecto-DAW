<?php

class VistaAjax extends Vista {
    
    private function index() {
       header('Content-Type: application/json');
       return json_encode($this->getModel()->getDatos());
    }
    
    function render($accion) {
        $datos = $this->getModel()->getDatos();
        return json_encode($datos);
    }
}