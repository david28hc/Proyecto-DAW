<?php

class ModeloProduct extends Modelo {
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerProduct($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function addProduct($product) {
        return $this->gestor->add($product);
    }
    
    function get($id){
        return $this->gestor->get($id);
    }
    
    function getProduct($param) {
        return $this->gestor->get($param);
    }
    
    function getAll() {
        return $this->gestor->getAll();
    }
    
    function getFamilyInsert() {
        return $this->gestor->getFamilyInsert();
    }
    
    function remove($id) {
        return $this->gestor->remove($id);
    }
    
    function editProduct(Product $product) {
        return $this->gestor->edit($product);
        //$manager = new ManagerProduct($this->getDataBase());
        //$res = $manager->edit($product);
        //return $res;
    }
    
    function getCount(){
        return $this->gestor->getCountAll();
    }
    
    function getPaginateUser($a, $b){
        return $this->gestor->getUserLimit($a, $b);
    }
    
    function getFamily($idFamily){
        return $this->gestor->getFamily($idFamily);
    }
    
    function getAllAjax() {
        return $this->gestor->getAllAjax();
    }
    
}
?>