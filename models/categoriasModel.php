<?php


class categoriasModel extends PDO{


    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

    public function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * from categorias");
        $sentencia->execute();
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }

    public function insertarCategoria($genero){

        $sentencia = $this->db->prepare("INSERT INTO categorias (genero) VALUES(?)");
        $sentencia->execute(array($genero));
    }

    public function borrarCategoria($id){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function modificarCategoria($id,$replace){
        $sentencia = $this->db->prepare("UPDATE categoria SET genero=? WHERE id=?");
        $sentencia = execute(array($replace,$id));
    }

}
