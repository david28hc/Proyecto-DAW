<?php

class Enrutador {
    
    private $rutas = array();

    function __construct() {
        $this->rutas['member'] = new Ruta('ModeloMember', 'VistaMember', 'ControladorMember');
        $this->rutas['clientes'] = new Ruta('ModeloClientes', 'VistaClientes', 'ControladorClientes');
        $this->rutas['product'] = new Ruta('ModeloProduct', 'VistaProduct', 'ControladorProduct');
        $this->rutas['family'] = new Ruta('ModeloFamily', 'VistaFamily', 'ControladorFamily');
        $this->rutas['tpv'] = new Ruta('ModeloTPV', 'VistaTPV', 'ControladorTPV');
        $this->rutas['ajax'] = new Ruta('ModeloProduct', 'VistaAjax', 'ControladorProduct');
        $this->rutas['carrito'] = new Ruta('ModeloProduct', 'VistaAjax', 'ControladorCarrito');
        $this->rutas['clientesajax'] = new Ruta('ModeloClientes', 'VistaAjax', 'ControladorClientes');
        $this->rutas['ticket'] = new Ruta('ModeloTicket', 'VistaAjax', 'ControladorTicket');
    }

    function getRoute($ruta) {
        //echo 'Enrutador<br>';
        if (!isset($this->rutas[$ruta])) {
            //echo 'Ruta no existe <br>';
            return $this->rutas['member'];
        }
        //echo 'Ruta existe <br>';
        return $this->rutas[$ruta];
    }
}
?>