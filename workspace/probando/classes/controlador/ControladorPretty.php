<?php

class ControladorPretty extends Controlador { 

    function __construct(Modelo $modelo) {
        parent::__construct($modelo);
        $this->getModel()->setDato('plantilla', 'prettyurl');
    }

    function index() {
        $this->getModel()->setDato('archivo', '_index.html');
    }
}