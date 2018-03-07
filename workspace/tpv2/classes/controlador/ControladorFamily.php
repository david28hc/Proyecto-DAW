<?php

class ControladorFamily extends Controlador {
    function index() {
        if($this->isLogged()) {
            if($this->getUser()->getMember() === 'admin@admin.es') {
                if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $family = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td>{{idFamily}}</td>
                <td class="familyCap">{{family}}</td>
                <td><a href="family/borrar?id={{idFamily}}" class="confirmBorrado"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                <td><a href="family/edit?id={{idFamily}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                </tr>';
                $cadena = '';
                foreach($family as $familia) {
                    $cadena .= Util::renderText($linea, $familia->getAttributesValues());
                }
                $rango = '<div class="paginationPropia"><a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listafamily', $cadena);
                $this->getModel()->setDato('archivo','listafamilias.html');
            } else {
                $this->getModel()->setDato('archivo','tpv_member.html');
            }
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->getModel()->setDato('archivo','index_lockscreen.html');
        }
    }
    
    function borrar() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $res = $this->getModel()->remove(Request::read('id'));
            header('Location: family/listafamily?op=borrar&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function edit() {
        $id = Request::read('id');
        if($this->isLogged()) {
            $family = $this->getModel()->get($id);
            $this->getModel()->setDato('archivo' , 'editarfamily.html');
            $this->getModel()->setDatos($family->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function accionEditFamily() {
        $family = new Family();
        $family->read();
            if($this->isLogged()) {
                        $res = $this->getModel()->edit($family);
                        header('Location: family/listafamily?op=accionEditFamily&res=' . $res);
                        exit;
            }else{
                $this->index();
            }
    }
    
    function insertarFamily() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $this->getModel()->setDato('archivo', 'insertar_familia.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function registro() {
        $family = new Family();
        $family->read();
        if($this->isLogged()) {
            $newFamily = $this->getModel()->addFamily($family);
            if($newFamily) {
                header("Location: family/listafamily?resultado=bien");
            } else {
                header("Location: family/listafamily?resultado=" . $newFamily);
            }
        
        } else {
            $this->index();
        }
    }

}