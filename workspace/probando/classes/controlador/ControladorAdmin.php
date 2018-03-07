<?php

class ControladorAdmin extends Controlador { 

    function __construct(Modelo $modelo) {
        parent::__construct($modelo);
        $this->getModel()->setDato('plantilla', 'admin');
    }

    function index() {
        $this->getModel()->setDato('archivo', '_index.html');
    }
}