<?php

class Product {
    private $idProduct, $idFamily, $product, $price, $description;
    
    function __construct($idProduct = null, $idFamily = null, $product = null,$price = null,$description = null) {
        $this->idProduct = $idProduct;
        $this->idFamily = $idFamily;
        $this->product = $product;
        $this->price = $price;
        $this->description = $description;
    }
    
    function getIdProduct() {
        return $this->idProduct;
    }
    function getIdFamily() {
        return $this->idFamily;
    }
    function getProduct() {
        return $this->product;
    }
    function getPrice() {
        return $this->price;
    }
    function getDescription() {
        return $this->description;
    }
    
    function setIdProduct($idproduct) {
        $this->idProduct = $idproduct;
    }
    function setIdFamily($idfamily) {
        $this->idFamily = $idfamily;
    }
    function setProduct($product) {
        $this->Product = $product;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    function setDescription($description) {
        $this->description = $description;
    }
    function getAttributesValues(){
        $valoresCompletos = [];
        foreach($this as $atributo => $valor){
            $valoresCompletos[$atributo] = $valor;
        }
        return $valoresCompletos;
    }
    function set(array $array, $pos = 0){
        foreach ($this as $campo => $valor) {
            if (isset($array[$pos]) ) {
                $this->$campo = $array[$pos];
            }
            $pos++;
        }
    }
    
    function read(){
        foreach($this as $atributo => $valor){
            $this->$atributo = Request::read($atributo);
        }
    }
    
}
?>