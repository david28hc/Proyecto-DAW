<?php

class ControladorTPV extends Controlador {
    function index() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
                $ModelProduct = new ModeloProduct();
                $pagination = new Pagination($ModelProduct->getCount(), $page, 5);
                $producto = new Product();
                
                
            $this->getModel()->setDato('archivo', 'listatpv.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function listadocompleto() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $usuarios = $this->getModel()->getUsuariosParaJson();
            $this->getModel()->setDato('listado', $usuarios);
        }
    }
    
    
    
}
?>