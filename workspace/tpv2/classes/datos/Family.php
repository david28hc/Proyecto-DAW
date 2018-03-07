<?php

class Family {
    private $idFamily, $family;
    
    function __construct($idFamily = null, $family = null) {
        $this->idFamily = $idFamily;
        $this->family = $family;
    }
    
    function getIdFamily() {
        return $this->idFamily;
    }
    function getFamily() {
        return $this->family;
    }
    
    function setIdFamily($idfamily) {
        $this->idFamily = $idfamily;
    }
    function setFamily($family) {
        $this->family = $family;
    }
    
    function read(){
        foreach($this as $atributo => $valor){
            $this->$atributo = Request::read($atributo);
        }
    }
    
    function set(array $array, $pos = 0){
        foreach ($this as $campo => $valor) {
            if (isset($array[$pos]) ) {
                $this->$campo = $array[$pos];
            }
            $pos++;
        }
    }
    
    function getAttributesValues(){
        $valoresCompletos = [];
        foreach($this as $atributo => $valor){
            $valoresCompletos[$atributo] = $valor;
        }
        return $valoresCompletos;
    }
}
?>