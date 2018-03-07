<?php

class ControladorMember extends Controlador {
    function index() {
        $res = Request::read('res');
            if($res == '0login'){
                    $resultado='<h3 style="padding-left: 2%;color: darkgoldenrod;">Correo Electronico o contraseña incorrecta.</h3>';
                    $this->getModel()->setDato('errorLogin' , $resultado);
            }
            
        if($this->isLogged()) {
            if($this->getUser()->getMember() === 'admin@admin.es') {
                if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $usuarios = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td>{{idMember}}</td>
                <td>{{member}}</td>
                <td>{{password}}</td>
                <td>
                    <a href="member/borrar?id={{idMember}}" class="confirmBorrado">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <a href="member/editaruser?id={{idMember}}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                </tr>';
                $cadena = '';
                foreach($usuarios as $usuario) {
                    $cadena .= Util::renderText($linea, $usuario->getAttributesValues());
                }
                $rango = '<div class="paginationPropia"><a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listausuario', $cadena);
                $this->getModel()->setDato('archivo','admin_tpv.html');
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
    
    function login() {
        $logincorreo = Request::read('correo');
        $pass = Request::Read('password');
        $member = $this->getModel()->getMember($logincorreo);
        if($member !== null && Util::verificarClave( $pass , $member->getPassword() )) {
            $res = $this->getSession()->login($member);
        }else{
            header('Location: index?res=0login');
            exit;
        }
        $this->index();
    }
    
    function logout() {
        if($this->isLogged()) {
            $this->getSession()->logout();
            $this->index();
        } else {
            $this->index();
        }
    }
    //Editar usuario
    function editarMember() {
        if($this->isLogged()) {
            $member = $this->getUser();
            $this->getModel()->setDato('correo' , $member->getMember());
            $this->getModel()->setDato('password' , $member->getPassword());
            $this->getModel()->setDato('archivo' , 'editarmember.html');
        } else {
            $this->index();
        }
    }
    function accionEditarMember() {
        $correo = Request::read('correo');
        $pass = Request::Read('password');
        $passA = Request::Read('passwordNew');
        $passB = Request::Read('passwordNewRepeat');
        $memberActual = $this->getUser();
            if(Filter::isEmail($correo)){
                //INCOMPLETO
                    if ($pass !== null && $pass !== '' && $pass === $passR && $passA !== null &&
                        Util::verificarClave($passA, $usuarioActual->getClave())) { 
                            $usuario->setClave($pass);
                            $res = $this->getModel()->editarMember($usuario);
                    } 
                    else {
                        $res = $this->getModel()->editarMember($usuario);
                    }
                        header('Location: index?op=editarusuario' . $res);
                        exit;
            } else {
                $this->index();
                exit;
        }
    }
    
    
    function borrar() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $res = $this->getModel()->remove(Request::read('id'));
            header('Location: index?op=borrar&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function editaruser() {
         $id = Request::read('id');
         if($this->isLogged()) {
             if($this->getUser()->getMember() === 'admin@admin.es') {
                 $op = Request::read('op');
                $res = Request::read('res');
                
                if($res == '0foto'){
                    $resultado='<h1 style="color: darkgoldenrod;">Error: Imagen no valida.</h1>';
                    $this->getModel()->setDato('error1' , $resultado);
                }
                if($res == '1foto'){
                    $resultado='<h1 style="color: darkgoldenrod;">Cambiada la foto</h1>';
                    $this->getModel()->setDato('error1' , $resultado);
                }
                
                 $usuario = $this->getModel()->get($id);
                 $this->getModel()->setDato('archivo','editarusuario.html');
                 $this->getModel()->setDatos($usuario->getAttributesValues());
             } else {
                $usuario = $this->getModel()->get($id);
                $this->getModel()->setDato('archivo','tpv_member.html');
                $this->getModel()->setDatos($usuario->getAttributesValues());
            }
        } else {
            $this->index();
        }
    }
    
    function editarusuario() {
        $parametro = 'All';
        $usuario = new Member();
        $usuario->read();
        $userDB = $this->getModel()->get($this->getUser()->getIdMember());
        $claveNueva = Request::read('clavenueva');
        $claveRep = Request::read('clavenuevarepetida');
        if($this->isLogged()) {
             if($this->getUser()->getMember() === 'admin@admin.es') {
                if($claveNueva === null || $claveRep === null) {
                    $parametro = 'sinpass';
                    $res = $this->getModel()->editAdmin($parametro, $usuario);
                    header('Location: index?op=editar&res=' . $res);
                    exit;
                } else if($claveNueva === $claveRep){
                    //admin con pass sin errores
                    $res = $this->getModel()->editAdmin($parametro, $usuario);
                    header('Location: index?op=editar&res=' . $res);
                    exit;
                }else{
                    //admin con pass y errores
                    header('Location: index?op=editar&res=fallo');
                    exit;
                }
             } else {
                //no admin
                if($claveNueva === null || $claveRep === null || $usuario->getClave() === null) {
                    //no admin sin pass
                    $parametro = 'sinpass';
                    $res = $this->getModel()->edit($parametro, $usuario);
                    $this->index();
                    //header('Location: index.php?op=editar&res=' . $res);
                } else if($claveNueva === $claveRep && Util::verificarClave($usuario->getClave() , $userDB->getClave())){
                    //no admin con pass sin errores
                    $res = $this->getModel()->edit($parametro, $usuario);
                    $this->index();
                    //header('Location: index.php?op=editar&res=' . $res);
                } else{
                    //no admin con pass y errores
                    $this->index();
                    //header('Location: index.php?op=editar&res=fallo');
                }
            }
         }else {
            $this->index();
            exit;
        }
    }
    
    function insertarMember() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            $this->getModel()->setDato('archivo', 'insertar_usuario.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function registro() {
        $usuario = new Member();
        $usuario->read();
        $claveRepetida = Request::read('claverepetida');
        if(($usuario->getPassword() !== '') && ($usuario->getPassword() === $claveRepetida)) {
            $paco = $this->getModel()->addMember($usuario);
            if($paco) {
                header("Location: index?op=registro&resultado=bien");
            } else {
                header("Location: index?op=registro&resultado=" . $paco);
            }
        
        } else {
            $this->index();
        }
    }
    
    function subirfoto(){
        if($this->isLogged() && $this->getUser()->getMember() === "admin@admin.es"){
            
            if(isset($_FILES['foto'])){
                echo 'entro';
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $filename = $_FILES['foto']['tmp_name'];
                $mime=$finfo->file($filename);
                
                if($mime==='image/gif' || $mime==='image/png' || $mime==='image/jpeg'){
                    $upload = new FileUpload('foto' , Request::read('idMember'), '../fotosusuarios' , 2 * 1024 * 1024, FileUpload::SOBREESCRIBIR);
                    echo $res = $upload->upload().'foto';
                }else{
                    $res='0foto';
                }
            }else{
                $res='0foto';
            }
            header('Location: member/editaruser?id=' . Request::read('idMember') . '&op=subirfoto&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function verfoto(){
        if($this->isLogged()){
            if($this->isLogged()) {
                header('Content-type: image/*');
                $id = Request::read("id");
                $archivo = '../fotosusuarios/' . $id;
                if(!file_exists($archivo)) {
                    $archivo = '../fotosusuarios/0';
                }
                readfile($archivo);
                exit();
            } else {
                $this->index();
            }
        }
    }
    
    function verfotosesion(){
        if($this->isLogged()){
            if($this->isLogged()) {
                header('Content-type: image/*');
                $archivo = '../fotosusuarios/' . $this->getUser()->getIdMember();
                if(!file_exists($archivo)) {
                    $archivo = '../fotosusuarios/0';
                }
                readfile($archivo);
                exit();
            } else {
                $this->index();
            }
        }
    }
    
    function listarUsuarios() {
        if($this->isLogged() && $this->getUser()->getMember() === 'admin@admin.es') {
            if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $usuarios = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td>{{idMember}}</td>
                <td>{{member}}</td>
                <td>{{password}}</td>
                <td>
                    <a href="member/borrar?id={{idMember}}" class="confirmBorrado">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
                <td>
                    <a href="member/editaruser?id={{idMember}}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                </tr>';
                $cadena = '';
                foreach($usuarios as $usuario) {
                    $cadena .= Util::renderText($linea, $usuario->getAttributesValues());
                }
                $rango = '<div class="paginationPropia"><a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a href="https://proyecto-panaderia-soulsilver.c9users.io/tpv2/member/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listausuario', $cadena);
            $this->getModel()->setDato('archivo', 'listausuarios.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
}