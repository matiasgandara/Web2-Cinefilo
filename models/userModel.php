<?php

class userModel extends PDO{



    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE nombre_usuario = ?");
        $sentencia->execute(array($user));
        
        $pass = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $pass;
    }

    public function Registro($user, $pass, $administrador){
        $sentencia = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, clave, administrador) VALUES(?,?,?)");
        $sentencia->execute(array($user, $pass, $administrador));
    }
}
