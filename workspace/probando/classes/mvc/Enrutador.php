<?php

class Enrutador {

    private $default = 'pretty';
    private $rutas = array();

    function __construct() {
        $this->rutas[$this->default] = new Ruta('ModeloPretty', 'VistaPretty', 'ControladorPretty');
        $this->rutas['admin'] = new Ruta('ModeloPretty', 'VistaPretty', 'ControladorAdmin');
        $this->rutas['clientes'] = new Ruta('ModeloClientes', 'VistaClientes', 'ControladorClientes');
    }

    function getRoute($ruta) {
        if (!isset($this->rutas[$ruta])) {
            return $this->rutas[$this->default];
        }
        return $this->rutas[$ruta];
    }
}