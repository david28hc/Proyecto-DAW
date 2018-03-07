<?php

class ModeloFamily extends Modelo {
    
    private $dataBase, $datos, $gestor;
    
    function __construct() {
        $this->dataBase = new DataBase();
        $this->datos = array();
        $this->gestor = new ManagerFamily($this->dataBase);
    }
    
    function __destruct() {
        $this->dataBase->closeConnection();
    }
    
    function addFamily($family) {
        return $this->gestor->add($family);
    }
    
    function get($id){
        return $this->gestor->get($id);
    }
    
    function getFamily($param) {
        return $this->gestor->getMember($param);
    }
    
    function getAll() {
        return $this->gestor->getAll();
    }
    
    function remove($id) {
        return $this->gestor->remove($id);
    }
    
    //function edit(Family $family) {
    //    $manager = new ManagerFamily($this->getDataBase());
    //    $res = $manager->edit($family);
    //    return $res;
    //}
    
    function edit($id) {
        return $this->gestor->edit($id);
    }
    
    //function edit($parametro, $objeto){
    //    echo '2';exit;
    //    switch ($parametro) {
    //        case 'All':
    //            return $this->editar($objeto);
    //            break;
    //        case 'sinpass':
    //            return $this->gestor->editSinClave($objeto);
    //            break;
    //        default:
    //            return 0;
    //            break;
    //    }
    //}
    
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