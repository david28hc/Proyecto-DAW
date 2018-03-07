<?php

class ControladorCarrito extends Controlador {
    function verCarro() {
        $carro = $this->getSession()->getCarro();
        $this->getModel()->setDato('carro', $carro->getCarrito());
    }   
    
    function addCarro() {
        if($this->isLogged()) {
            $id_product = Request::read('id');
            $cantidad = Request::read('cantidad');
            if($cantidad == null) {
                $cantidad = 1;
            }
            
            $product = $this->getModel()->getProduct($id_product);
            
            $carro = $this->getSession()->getCarro();
            $carro->add($product->getIdProduct(), $product->getAttributesValues(), $cantidad);
            $this->getModel()->setDato('carro', $carro->getCarrito());
        } else {
            $this->getModel()->setDato('carro', '');
        }
    }
    
    function reiniciarCarro() {
        $this->getSession()->setCarro();
        $carro = $this->getSession()->getCarro();
        $this->getModel()->setDato('carro', $carro->getCarrito());
    }
    
    //Para quitar de uno en uno
    function subCarro() {
        if($this->isLogged()) {
            $id_product = Request::read('id');
            // $this->getSession()->set('idTicket', Request::read('idTicket'));
            
            $product = $this->getModel()->getProduct($id_product);
            
            $carro = $this->getSession()->getCarro();
            $carro->sub($product->getIdProduct(), $product->getAttributesValues(), $cantidad = 1);
            $this->getModel()->setDato('carro', $carro->getCarrito());
        } else {
            $this->getModel()->setDato('carro', '');
        }
    }
    
    function removeCarro() {
        if($this->isLogged()) {
            $id_product = Request::read('id');
            $this->getSession()->set('idTicket', Request::read('idTicket'));
            
            $product = $this->getModel()->getProduct($id_product);
            
            $carro = $this->getSession()->getCarro();
            
            $carro->del($id_product);
            $this->getModel()->setDato('carro', $carro->getCarrito());
        } else {
            $this->getModel()->setDato('carro', '');
        }
    }
}