<?php

class ManagerClientes implements Manager {
    
    private $dataBase;
    
    function __construct($dataBase) {
        $this->database = $dataBase;
    }
    
    function add($objeto){
        $sql = "INSERT INTO client(name, surname, tin, address, location, postalcode, province, email) VALUES (:name, :surname, :tin, :address, :location, :postalcode, :province, :email)";
        $params = array(
            'name' => $objeto->getName(),
            'surname' => $objeto->getSurname(),
            'tin' => $objeto->getTin(),
            'address' => $objeto->getAddress(),
            'location' => $objeto->getLocation(),
            'postalcode' => $objeto->getPostalcode(),
            'province' => $objeto->getProvince(),
            'email' => $objeto->getEmail()
        );
        $res = $this->database->execute($sql , $params);
        
        if($res){
            $id = $this->database->getId();
            $objeto->setIdClient($id);
        }else{
            $id = 0;
        }
        
        return $id;
    }
    
    function edit($cliente){
        $sql = "Update client set idClient = :idClient, name = :name, surname = :surname, tin = :tin, address = :address, location = :location, postalcode = :postalcode, province = :province, email = :email where idClient = :idClient";
        $params = array(
            'idClient' => $cliente->getIdClient(),
            'name' => $cliente->getName(),
            'surname' => $cliente->getSurname(),
            'tin' => $cliente->getTin(),
            'address' => $cliente->getAddress(),
            'location' => $cliente->getLocation(),
            'postalcode' => $cliente->getPostalcode(),
            'province' => $cliente->getProvince(),
            'email' => $cliente->getEmail()
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function getAll() {
        $sql = "Select * from client";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $clientes = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $client = new Client();
               $client->set($fila);
               $clientes[] = $client;
            }
        }
        return $clientes;
    }
    
    function get($id){
        $sql = "Select * from client where idClient = :idClient";
        $params = array(
            'idClient' => $id
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $client = new Client();
        if($res && $fila = $sentencia->fetch()){
            $client->set($fila);
        }
        return $client;
    }
    
    function getClientFromTin($tin){
        $sql = "Select * from member where tin = :tin";
        $params = array(
            'tin' => $tin
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $client = new  Client();
        if($res && $fila = $sentencia->fetch()){
            $client->set($fila);
        }
        return $client;
    }
    
    function remove($id){
        $sql = "Delete from client where idClient = :idClient";
        $params = array(
            'idClient' => $id
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function getCountAll() {
        $sql = "select count(*) from client";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        if($res && $fila = $sentencia->fetch()){
            return $fila[0];
        }else{
            return 0;
        }
    }
    
    function getUserLimit($a , $b){
        $sql = 'select * from client limit ' . $a . ',' . $b . ';';
        $params = array(
            'a' => $a,
            'b' => $b
        );
        $res = $this->database->execute($sql, $params);
        $clientes = array();
        if($res){
            $sentencia = $this->database->getStatement();
            while($fila = $sentencia->fetch()){
                $client = new Client();
                $client->set($fila);
                $clientes[] = $client;
            }
        }
        return $clientes;
    }

    function getAllClient(){
        $sql = "Select * from client";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $clientes = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $cliente = new Clientes();
               $cliente->set($fila);
               $clientes[] = $cliente;
            }
        }
        return $clientes;
    }
    
}
?>