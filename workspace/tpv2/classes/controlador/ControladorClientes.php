<?php

class ControladorClientes extends Controlador {
    //Listar Clientes
    function index() {
        if($this->isLogged()) {
            if($this->getUser()->getMember() === 'admin@admin.es') {
                if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $clientes = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td>{{idClient}}</td>
                <td>{{name}}</td>
                <td>{{surname}}</td>
                <td>{{tin}}</td>
                <td>{{address}}</td>
                <td>{{location}}</td>
                <td>{{postalcode}}</td>
                <td>{{province}}</td>
                <td>{{email}}</td>
                <td><a href="clientes/borrar?id={{idClient}}" class="confirmBorrado"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                <td><a href="clientes/editar?id={{idClient}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                </tr>';
                $cadena = '';
                foreach($clientes as $client) {
                    $cadena .= Util::renderText($linea, $client->getAttributesValues());
                }
                $rango = '<div class="paginationPropia"><a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/clientes/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/clientes/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/clientes/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listacliente', $cadena);
                $this->getModel()->setDato('archivo','listaclientes.html');
            } else {
                $this->getModel()->setDato('archivo','tpv_member.html');
                //editar='<a href="./?accion=modificarperfil&ruta=member&id=">Nuevo cliente</a>';
                //$this->getModel()->setDato('editar',$editar);
            }
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->getModel()->setDato('archivo','index_lockscreen.html');
        }
    }
    
    function insertarcliente() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $this->getModel()->setDato('archivo', 'insertar_cliente.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function registro() {
        $client = new Client();
        $client->read();
            $paco = $this->getModel()->addClientes($client);
            if($paco) {
                header("Location: clientes/listaclientes?op=registro&resultado=bien");
            } else {
                header("Location: clientes/listaclientes?op=registro&resultado=" . $paco);
            }
    }
    
    function borrar() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $res = $this->getModel()->remove(Request::read('id'));
            header('Location: clientes/listaclientes?op=borrar&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function editar() {
         $id = Request::read('id');
         if($this->isLogged()) {
             if($this->getUser()->getMember() === 'admin@admin.es') {
                 $client = $this->getModel()->get($id);
                 $this->getModel()->setDato('archivo','editarcliente.html');
                 $this->getModel()->setDatos($client->getAttributesValues());
             } else {
                $client = $this->getModel()->get($id);
                $this->getModel()->setDato('archivo','tpv_member.html');
                $this->getModel()->setDatos($client->getAttributesValues());
            }
        } else {
            $this->index();
        }
    }
    
    function editarcliente() {
        $cliente = new Client();
        $cliente->read();
        if($this->isLogged()) {
             if($this->getUser()->getMember() === 'admin@admin.es') {
                    $res = $this->getModel()->editClientes($cliente);
                    header('Location: clientes/listaclientes?op=editarcliente&res=' . $res);
                    exit;
             } else {
                    $this->index();
                    exit;
                    //header('Location: index.php?op=editar&res=fallo');
                }
        }
    } 
    
    function clientesAjax() {
        $this->getModel()->setDato('datacliente', $this->getModel()->getAllAjax());
     }
     
     function guardarTicket() {
         $ticket = Request::read('ticketmandar');
         $tai = $ticket['idclient'];
         //$ticket['idMember'] = $this->getUser()->getId();
         $user = $this->getUser()->getIdMember();
         $ticket['idmember'] = $user;
         $ticket['date'] = date('Y-m-d H:i:s');
         $objeto = new Ticket();
         //$ver = Util::varDump($ticket);
         $objeto->setFromAssociative($ticket);
         //$this->getModel()->setDato('devuelto', Util::varDump($objeto));
         $res = $this->getModel()->addTicket($objeto);
         if($res > 0) {
             $detail = Request::read('ticketdm');
             foreach($detail as $det) {
                 $det['idticket'] = $res;
                 $objetodetail = new Ticketdetail();
                 $objetodetail->setFromAssociative($det);
                 $this->getModel()->addTicketDetail($objetodetail);
                 $this->getModel()->setDato('devuelto', Util::varDump($objetodetail));
             }
             
         }
     }
}
?>