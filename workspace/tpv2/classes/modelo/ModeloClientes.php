<?php

class ModeloClientes extends Modelo {
    
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerClientes($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function addClientes($clientes) {
        return $this->gestor->add($clientes);
    }
    
    function editClientes($cliente) {
        return $this->gestor->edit($cliente);
    }
    
    function get($idclientes){
        return $this->gestor->get($idclientes);
    }
    
    function getClientes($param) {
        return $this->gestor->getClientes($param);
    }
    
    function getClientTin($tin) {
        return $this->gestor->getClientFromTin($tin);
    }
    
    function getAll() {
        return $this->gestor->getAll();
    }
    
    function remove($idclientes) {
        return $this->gestor->remove($idclientes);
    }
    
    function getCount(){
        return $this->gestor->getCountAll();
    }
    
    function getPaginateUser($a, $b){
        return $this->gestor->getUserLimit($a, $b);
    }
    
    function getAllAjax() {
        return $this->gestor->getAllAjax();
    }
    
    function addTicket($objeto) {
        return $this->gestor->addTicket($objeto);
    }
    
    function addTicketDetail($objeto) {
        return $this->gestor->addTicketDetail($objeto);
    }
}
?>