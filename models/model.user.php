<?php

class UserModel {

private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=usuarios;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE nombreusuario = ?");
        $sentencia->execute(array($user));
        
        $pass = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $pass;
    }
}