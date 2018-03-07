<?php

class ModeloTPV extends Modelo {
    
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerMember($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function get($id){
        return $this->gestor->get($id);
    }
    
    function getMember($login){
        return $this->gestor->getMember($login);
    }
    
    function remove($id) {
        return $this->gestor->remove($id);
    }
    
    
    
    //AJAX
    
    function getUsuariosParaJson() {
        $usuarios = $this->getUsuarios();
        $array = array();
        foreach($usuarios as $usuario) {
            $usuario->setClave('');
            $array[] = $usuario->getAttributesValues();
        }
        return $array;
    }
}