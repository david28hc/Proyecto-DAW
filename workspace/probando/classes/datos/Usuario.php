<?php

class Usuario {

    use Comun;
    
    private $id, $correo, $clave, $verificado;
    
    function __construct($id = null, $correo = null, $clave = null, $verificado = null) {
        $this->id = $id;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->verificado = $verificado;
    }

    function getId() {
        return $this->id;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getClave() {
        return $this->clave;
    }

    function getVerificado() {
        return $this->verificado;
    }

    function isVerificado() {
        return $this->getVerificado();
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setVerificado($verificado) {
        $this->verificado = $verificado;
    }

}