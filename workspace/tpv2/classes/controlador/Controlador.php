<?php

/* vamos a dejarlo con sólo los métodos comunes a todos */

class Controlador {

    private $modelo;
    private $sesion;

    function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
        $this->sesion = new Session('administracion');
        if($this->isLogged()) {
            $usuario = $this->getUser();
            $this->getModel()->setDato('usuario', $usuario->getMember());
            $this->getModel()->setDato('id_user' , $usuario->getIdMember());
            $this->getModel()->setDato('password' , $usuario->getPassword());
        }
        $this->getModel()->setDato('base', Constant::BASE);
    }

    function getModel() {
        return $this->modelo;
    }

    function getSession() {
        return $this->sesion;
    }

    function getUser() {
        return $this->getSession()->getUser();
    }

    function isLogged() {
        return $this->getSession()->isLogged();
    }
}
?>