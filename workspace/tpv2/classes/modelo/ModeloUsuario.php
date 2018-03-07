<?php

class ModeloUsuario extends Modelo {
    
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerMember($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function addUsuario($usuario) {
        return $this->gestor->add($usuario);
    }
    
    function get($id){
        return $this->gestor->get($id);
    }
    
    function getMember($login){
        return $this->gestor->getMember($login);
    }
    
    function getCorreoNick($param) {
        return $this->gestor->getUsuarioCorreoNick($param);
    }
    
    function getAll() {
        return $this->gestor->getAll();
    }
    
    function remove($id) {
        return $this->gestor->remove($id);
    }
    
    function editar($usuario) {
        return $this->gestor->edit($usuario);
    }
    
    function edit($parametro, $objeto){
        switch ($parametro) {
            case 'All':
                return $this->editar($objeto);
                break;
            case 'sinpass':
                return $this->gestor->editSinClave($objeto);
                break;
            default:
                return 0;
                break;
        }
    }
    
    function editPassword($id, $pass) {
        return $this->gestor->resPass($id, $pass);
    }
    
    function editAdmin($parametro, $objeto){
        switch ($parametro) {
            case 'All':
                return $this->gestor->editAdmin($objeto);
                break;
            case 'sinpass':
                return $this->gestor->editAdminSinClave($objeto);
                break;
            default:
                return 0;
                break;
        }
    }
    
    function getCount(){
        return $this->gestor->getCountAll();
    }
    
    function getPaginateUser($a, $b){
        return $this->gestor->getUserLimit($a, $b);
    }
    
    function verificarUsuario($id) {
        return $this->gestor->editVerificado($id);
    }
    
}

?>