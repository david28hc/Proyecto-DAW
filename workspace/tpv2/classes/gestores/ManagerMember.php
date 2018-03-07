<?php

class ManagerMember implements Manager {
    
    private $dataBase;
    
    function __construct($dataBase) {
        $this->database = $dataBase;
    }
    
    function add($objeto){
        $sql = "INSERT INTO member(login, password) VALUES (:login, :password)";
        $params = array(
            'login' => $objeto->getMember(),
            'password' => Util::codificar($objeto->getPassword(),10),
        );
        $res = $this->database->execute($sql , $params);
        
        if($res){
            $id = $this->database->getId();
            $objeto->setIdMember($id);
        }else{
            $id = 0;
        }
        
        return $id;
    }
    
    function edit($objeto){
        $sql = "Update member set idMember = :idMember, login = :login, password = :password";
        $params = array(
            'idMember' => $objeto->getIdMember(),
            'login' => $objeto->getMember(),
            'password' => $objeto->getPassword()
        );
        
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function get($id){
        $sql = "Select * from member where idMember = :idMember";
        $params = array(
            'idMember' => $id
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $usuario = new Member();
        if($res && $fila = $sentencia->fetch()){
            $usuario->set($fila);
        }
        return $usuario;
    }
    
    function getMember($login){
        $sql = "Select * from member where login = :login";
        $params = array(
            'login' => $login
        );
        $res = $this->database->execute($sql, $params);
        $sentencia = $this->database->getStatement();
        $usuario = new Member();
        if($res && $fila = $sentencia->fetch()){
            $usuario->set($fila);
        }
        return $usuario;
    }

    
    function getAll(){
        $sql = "Select * from member";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        $usuarios = array();
        
        if($res)  {
            while($fila = $sentencia->fetch()) {
               $usuario = new Usuario();
               $usuario->set($fila);
               $usuarios[] = $usuario;
            }
        }
        return $usuarios;
    }
    
    function remove($id){
        $sql = "Delete from member where idMember = :idMember";
        $params = array(
            'idMember' => $id
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }
    
    function getCountAll() {
        $sql = "select count(*) from member";
        $res = $this->database->execute($sql);
        $sentencia = $this->database->getStatement();
        if($res && $fila = $sentencia->fetch()){
            return $fila[0];
        }else{
            return 0;
        }
    }
    
    function getUserLimit($a , $b){
        $sql = 'select * from member limit ' . $a . ',' . $b . ';';
        $params = array(
            'a' => $a,
            'b' => $b
        );
        $res = $this->database->execute($sql, $params);
        $usuarios = array();
        if($res){
            $sentencia = $this->database->getStatement();
            while($fila = $sentencia->fetch()){
                $usuario = new Member();
                $usuario->set($fila);
                $usuarios[] = $usuario;
            }
        }
        return $usuarios;
    }
    
    function editAdmin($objeto){
        $sql = "Update member set login = :login, password = :password where idMember = :idMember";
        $params = array(
            'idMember' => $objeto->getIdMember(),
            'login' => $objeto->getMember(),
            'password' => Util::codificar($objeto->getPassword())
        );
        
        $res = $this->database->execute($sql, $params);

        return $res;
    }
    
    function editAdminSinClave($objeto){
        $sql = "Update member set login = :login where idMember = :idMember";
        $params = array(
            'idMember' => $objeto->getIdMember(),
            'login' => $objeto->getMember()
        );
        $res = $this->database->execute($sql, $params);
        return $res;
    }

}
?>