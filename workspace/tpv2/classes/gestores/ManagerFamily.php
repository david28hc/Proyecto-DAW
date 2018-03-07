<?php

class ManagerFamily implements Manager {
    
    private $dataBase;
    
    function __construct($dataBase) {
        $this->database = $dataBase;
    }
    
    function add($objeto){
        $sql = "INSERT INTO family(family) VALUES (:family)";
        $params = array(
            'family' => $objeto->getFamily()
        );
        $res = $this->database->execute($sql , $params);
        
        if($res){
            $id = $this->database->getId();
            $objeto->setIdFamily($id);
        }else{
            $id = 0;
        }
        
        return $id;
    }
    
    function edit($objeto){
        $sql = "Update family set idFamily = :idFamily, family = :family where idFamily = :idFamily";
        $params = array(
            'idFamily' => $objeto->getIdFamily(),
            'family' => $objeto->getFamily()
        );
        //echo $params['idFamily'];
        //echo '<br>';
        //echo $params['family'];
        //exit;
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function get($id){
        $sql = "Select * from family where idFamily = :idFamily";
        $params = array(
            'idFamily' => $id
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $family = new Family();
        if($res && $fila = $sentencia->fetch()){
            $family->set($fila);
        }
        return $family;
    }
    
    function getFamily($family){
        $sql = "Select * from family where family = :family";
        $params = array(
            'family' => $family
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $family = new Family();
        if($res && $fila = $sentencia->fetch()){
            $family->set($fila);
        }
        return $family;
    }

    
    function getAll(){
        $sql = "Select * from family";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $family = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $familia = new Family();
               $familia->set($fila);
               $family[] = $familia;
            }
        }
        return $family;
    }
    
    function remove($id){
        $sql = "Delete from family where idFamily = :idFamily";
        $params = array(
            'idFamily' => $id
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function getCountAll() {
        $sql = "select count(*) from family";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        if($res && $fila = $sentencia->fetch()){
            return $fila[0];
        }else{
            return 0;
        }
    }
    
    function getUserLimit($a , $b){
        $sql = 'select * from family limit ' . $a . ',' . $b . ';';
        $params = array(
            'a' => $a,
            'b' => $b
        );
        $res = $this->database->execute($sql, $params);
        $family = array();
        if($res){
            $sentencia = $this->database->getStatement();
            while($fila = $sentencia->fetch()){
                $familia = new Family();
                $familia->set($fila);
                $family[] = $familia;
            }
        }
        return $family;
    }
    
    function editAdmin($objeto){
        $sql = "Update family set family = :family where idFamily = :idFamily";
        $params = array(
            'idFamily' => $objeto->getIdFamily(),
            'family' => $objeto->getFamily()
        );
        
        $res = $this->database->execute($sql, $params);

        return $res;
    }
    
    function editAdminSinClave($objeto){
        $sql = "Update family set family = :family where idFamily = :idFamily";
        $params = array(
            'idFamily' => $objeto->getIdFamily(),
            'family' => $objeto->getFamily()
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }

}
?>