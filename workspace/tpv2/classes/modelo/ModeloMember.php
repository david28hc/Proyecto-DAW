<?php

class ModeloMember extends Modelo {
    
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerMember($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function addMember($member) {
        return $this->gestor->add($member);
    }
    
    function get($id){
        return $this->gestor->get($id);
    }
    
    function getMember($param) {
        return $this->gestor->getMember($param);
    }
    
    function getAll() {
        return $this->gestor->getAll();
    }
    
    function remove($id) {
        return $this->gestor->remove($id);
    }
    
    //Editar usuario
    function editarMember(Member $member) {
        $manager = new ManageMember($this->getDataBase());
        $res = $manager->edit($member);
        return $res;
    }
    
    function editar($member) {
        return $this->gestor->edit($member);
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
    
    
}