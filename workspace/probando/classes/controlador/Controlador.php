<?php

class Controlador {

    private $modelo;
    private $sesion;

    function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
        $this->sesion = new Session(Constants::NOMBRESESSION);
        $this->getModel()->setDato('base', Constants::BASE);
        if($this->isLogged()) {
            $usuario = $this->getUser();
            $this->getModel()->setDato('correo', $usuario->getCorreo());
        }
    }

    function getModel() {
        return $this->modelo;
    }
    
    function getSesion() {
        return $this->sesion;
    }

    function getUser() {
        return $this->getSesion()->getUser();
    }

    function index() {
        $this->getModel()->setDato('index', 'index');
    }
    
    function isAdministrator() {
        return $this->isLogged() &&
                $this->getUser()->getCorreo() === 'admin@admin.es';
    }
    
    function isAdvanced() {
        return $this->isLogged() &&
                $this->getUser()->getCorreo() === 'avanzado@admin.es';
    }

    function isLogged() {
        return $this->getSesion()->isLogged();
    }

}