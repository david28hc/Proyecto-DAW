<?php

class ControladorUsuario extends Controlador {
    
    function index() {
        if($this->isLogged()) {
            if($this->getUser()->getTipo() === 'administrador') {
                if(Request::read('page') === null){
                    $page = 1;
                }else{
                    $page = Request::read('page');
                }
                $pagination = new Pagination($this->getModel()->getCount(), $page, 5);
                $usuarios = $this->getModel()->getPaginateUser($pagination->getOffset(),  $pagination->getRpp());
                $linea = '<tr>
                <td>{{id}}</td>
                <td>{{nombre}}</td>
                <td>{{apellidos}}</td>
                <td>{{nombreusuario}}</td>
                <td>{{correo}}</td>
                <td><a href="usuario/borrar?id={{id}}" class="confirmBorrado">Borrar</a></td>
                <td><a href="usuario/modificarperfil?id={{id}}">Editar</a></td>
                </tr>';
                $cadena = '';
                foreach($usuarios as $usuario) {
                    $cadena .= Util::renderText($linea, $usuario->getAttributesValues());
                }
                $rango = '<div class="paginationPropia"><a class="btn btn-primary" href="https://mvc-krast.c9users.io/administracion/usuario/index?page=' . $pagination->getFirst() . '">&laquo;</a> ';
                foreach($pagination->getRange() as $number){
                    $rango .= '<a class="btn btn-secondary" href="https://mvc-krast.c9users.io/administracion/usuario/index?page=' . $number . '">' . $number . '</a> ';
                }
                $rango .= '<a class="btn btn-primary" href="https://mvc-krast.c9users.io/administracion/usuario/index?page=' . $pagination->getLast() . '">&raquo;</a></div> ';
                $this->getModel()->setDato('rango' , $rango);
                $this->getModel()->setDato('listausuario', $cadena);
                $this->getModel()->setDato('archivo','index_index_logged_admin.html');
            } else {
                $this->getModel()->setDato('archivo','view_profile.html');
            }
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->getModel()->setDato('archivo','index_index.html');
        }
    }
    
    function registro() {
        $usuario = new Usuario();
        $usuario->read();
        $claveRepetida = Request::read('claverepetida');
        if(Filter::isEmail($usuario->getCorreo()) && ($usuario->getClave() !== '') && ($usuario->getClave() === $claveRepetida)) {
            $usuario->setFechaalta(date("Y-m-d H:i:s"));
            $paco = $this->getModel()->addUsuario($usuario);
            if($paco) {
                $res = self::sendActivationMail($usuario);
                header("Location: index?op=registro&resultado=bien");
            } else {
                header("Location: index?op=registro&resultado=" . $paco);
            }
        
        } else {
            $this->index();
        }
    }
    
    function forgot() {
         $this->getModel()->setDato('archivo','view_password_reset.html');
    }
    
    function resetpass() {
        $mailpass = Request::read('mailpass');
        $paco = $this->getModel()->getCorreoNick($mailpass);
        if(Filter::isEmail($paco->getCorreo())) {
            $res = self::sendForgotMail($paco);
            header("Location: index?op=forgot&resultado=bien");
        } else {
            $this->index();
        }
    }
    
    function resetpassword() {
        $id = Request::read('id');
        $usuario = $this->getModel()->get($id);
        $this->getModel()->setDato('id', $usuario->getId());
        $this->getModel()->setDato('archivo', 'view_reset.html');                  
    }
    
    function cambiarpass() {
        $id = Request::read('idpass');
        $claveNueva = Request::read('passwordnueva');
        $claveRep = Request::read('passwordnuevarepetida');
        if($claveNueva !== null && $claveRep !== null && $claveNueva === $claveRep){
                    $res = $this->getModel()->editPassword($id, $claveNueva);
                    header('Location: index?op=respass&res=' . $res);
                    exit;
        }
    }
    
    private static function sendForgotMail(Usuario $usuario) {
        $enlace = '<a href="https://mvc-krast.c9users.io/administracion/usuario/resetpassword?id=' . 
                    $usuario->getId() . '&data=' . sha1($usuario->getId()). '">Resetear</a>';
        $resultado = Util::enviarCorreo ($usuario->getCorreo(), 'Reset Password', 'Cambia tu contraseña en el siguiente enlace: ' . $enlace);
        return $resultado;
    }

    private static function sendActivationMail(Usuario $usuario) {
        $enlace = '<a href="https://mvc-krast.c9users.io/administracion/usuario/activar?id=' . 
                    $usuario->getId() . '&data=' . sha1($usuario->getId()). '">activate</a>';
        $resultado = Util::enviarCorreo ($usuario->getCorreo(), 'Activa tu correo', 'Activa tu cuenta pulsando en el siguiente enlace: ' . $enlace);
        return $resultado;
    }
    
    function login() {
        $loginnickcorreo = Request::read('loginname');
        $pass = Request::Read('loginpass');
        $usuario = $this->getModel()->getCorreoNick($loginnickcorreo);
        if($usuario !== null && Util::verificarClave( $pass , $usuario->getClave() ) && $usuario->getVerificado() === '1') {
            $res = $this->getSession()->login($usuario);
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
    
    function modificarperfil() {
         $id = Request::read('id');
         if($this->isLogged()) {
             if($this->getUser()->getTipo() === 'administrador') {
                 $usuario = $this->getModel()->get($id);
                 $this->getModel()->setDato('archivo','view_profile_admin.html');
                 $this->getModel()->setDatos($usuario->getAttributesValues());
             } else {
                $usuario = $this->getModel()->get($id);
                $this->getModel()->setDato('archivo','view_profile.html');
                $this->getModel()->setDatos($usuario->getAttributesValues());
            }
        } else {
            $this->index();
        }
    }
    
    function editar() {
        $parametro = 'All';
        $usuario = new Usuario();
        $usuario->read();
        $userDB = $this->getModel()->get($this->getUser()->getId());
        $claveNueva = Request::read('clavenueva');
        $claveRep = Request::read('clavenuevarepetida');
        if($this->isLogged()) {
             if($this->getUser()->getTipo() === 'administrador') {
                if($claveNueva === null || $claveRep === null || $usuario->getClave() === null ) {
                    $parametro = 'sinpass';
                    $res = $this->getModel()->editAdmin($parametro, $usuario);
                    header('Location: index?op=editar&res=' . $res);
                    exit;
                } else if($claveNueva === $claveRep && Util::verificarClave($usuario->getClave() , $userDB->getClave())){
                    //admin con pass sin errores
                    $this->getModel()->editAdmin($parametro, $usuario);
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
    
    
    function subirfoto(){
        if($this->isLogged() && $this->getUser()->getMember() === "admin@admin.es"){
            $upload = new FileUpload('foto' , Request::read('idMember'), '../fotosusuarios' , 2 * 1024 * 1024, FileUpload::SOBREESCRIBIR);
            echo $res = $upload->upload();
            exit;
            header('Location: member/modificarperfil?id=' . Request::read('idMember') . '&op=subirfoto&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function verfoto(){
        if($this->isLogged()){
            if($this->isLogged()) {
                header('Content-type: image/*');
                $archivo = '../fotosusuarios/' . $this->getUser()->getId();
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
    
    function borrar() {
        if($this->isLogged() && $this->getUser()->getTipo() === 'administrador') {
            $res = $this->getModel()->remove(Request::read('id'));
            header('Location: index?op=borrar&res=' . $res);
            exit;
        }else{
            $this->index();
        }
    }
    
    function insertarusuario() {
        if($this->isLogged() && $this->getUser()->getTipo() === 'administrador') {
            $this->getModel()->setDato('archivo', 'insertar_usuario.html');
            $this->getModel()->setDatos($this->getUser()->getAttributesValues());
        } else {
            $this->index();
        }
    }
    
    function activar() {
        $id = Request::read('id');
        $data = Request::read('data');
        if($id !== null && $data === sha1($id)) {
            $res = $this->getModel()->verificarUsuario($id);
        }else{
            $res = 'fallo';
        }
        header('Location: index?op=verificar&res=' . $res);
        exit;
    }
}

?>