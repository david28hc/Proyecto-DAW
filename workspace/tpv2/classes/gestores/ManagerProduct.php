<?php

class ManagerProduct implements Manager {
    
    private $dataBase;
    
    function __construct($dataBase) {
        $this->database = $dataBase;
    }
    
    function add($product){
        $sql = "INSERT INTO product(idFamily, product, price, description) VALUES (:idFamily, :product, :price, :description)";
        $params = array(
            'idFamily'      => $product->getIdFamily(),
            'product'       => $product->getProduct(),
            'price'         => $product->getPrice(),
            'description'   => $product->getDescription()
        );
        $res = $this->database->execute($sql , $params);
        
        if($res){
            $id = $this->database->getId();
            $product->setIdProduct($id);
        }else{
            $id = 0;
        }
        
        return $id;
    }
    
    function edit($product){
        $idProduct = Request::read('idProduct');
        $sql = "Update product set idFamily = :idFamily, product = :product, price = :price, description = :description where idProduct = :idProduct";
        $params = array(
            'idFamily'      => $product->getIdFamily(),
            'product'       => $product->getProduct(),
            'price'         => $product->getPrice(),
            'description'   => $product->getDescription(),
            'idProduct'     => $idProduct
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function get($id){
        $sql = "Select * from product pro join family fa on fa.idFamily = pro.idFamily where pro.idProduct = :idProduct";
        $params = array(
            'idProduct' => $id
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $product = new Product();
        if($res && $fila = $sentencia->fetch()){
            $product->set($fila);
        }
        return $product;
    }
    
    /*function getFamilyInsert() {
        $sql = "Select * from product pro join family fa on fa.idFamily = pro.idFamily";
        $res = $this->database->execute($sql);
        $products = array();
        if($res){
            $sentencia = $this->database->getStatement();
            while($fila = $sentencia->fetch()){
                /*echo Util::varDump($fila);
                exit;
                $product = new Product();
                $product->set($fila);
                $products[] = $product;*//*
                $products [] = array(
                    'idProduct' => $fila[0],
                    'idFamily' => $fila[1],
                    'product' => $fila[2],
                    'price' => $fila[3],
                    'description' => $fila[4],
                    'idTablaFamily' => $fila[5],
                    'family' => $fila[6]
                );
            }
        }
        return $products;
    }*/
    
    function getFamilyInsert() {
        $sql = "Select * from family";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $family = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $familias [] = array(
                    'idFamily' => $fila[0],
                    'family' => $fila[1]
                );
            }
        }
        return $familias;
    }
    
    function getAll(){
        $sql = "Select * from product pro join family fa on fa.idFamily = pro.idFamily";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $products = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
                echo Util::varDump($fila);
                exit;
               /*$product = new Product();
               $product->set($fila);
               $products[] = $product;*/
            }
        }
        return $products;
    }
    
    function getAllAjax(){
        $sql = "Select * from product";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $products = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $product = new Product();
               $product->set($fila);
               $products[] = $product->getAttributesValues();
            }
        }
        return $products;
    }
    
    function remove($id){
        $sql = "Delete from product where idProduct = :idProduct";
        $params = array(
            'idProduct' => $id
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function getCountAll() {
        $sql = "select count(*) from product";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        if($res && $fila = $sentencia->fetch()){
            return $fila[0];
        }else{
            return 0;
        }
    }
    
    function getUserLimit($a , $b){
        $sql = 'select * from product pro join family fa on fa.idFamily = pro.idFamily limit :a , :b;';
        $params = array(
            'a' => array($a, PDO::PARAM_INT),
            'b' => array($b, PDO::PARAM_INT)
        );
        $res = $this->database->execute($sql, $params);
        $products = array();
        if($res){
            $sentencia = $this->database->getStatement();
            while($fila = $sentencia->fetch()){
                /*echo Util::varDump($fila);
                exit;
                $product = new Product();
                $product->set($fila);
                $products[] = $product;*/
                $products [] = array(
                    'idProduct' => $fila[0],
                    'idFamily' => $fila[1],
                    'product' => $fila[2],
                    'price' => $fila[3],
                    'description' => $fila[4],
                    'idTablaFamily' => $fila[5],
                    'family' => $fila[6]
                );
            }
        }
        return $products;
    }
    
    function getFamily($idFamily){
        $sql='select * from family where idFamily=:idFamily';
        $params = array(
            'idFamily' => $idFamily
        );
        $res = $this->database->execute($sql, $params);
        $family ='';
        if ($res){
            $sentencia = $this->database->getStatement();
            $family = $sentencia->fetch()['family'];
        }
        return $family;
    }
}