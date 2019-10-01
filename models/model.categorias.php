<?php


class CategoriasModel{
    private $db;


    public function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

    public function GetCategorias(){
        $sentencia = $this->db->prepare("SELECT * from categorias");
        $sentencia->execute();
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }

/*     public function GetCategoria($id){
            $sentencia = $this->db->prepare("SELECT FROM categorias WHERE id = ?");
            $sentencia->execute(array($id));
            $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
            return $categoria;
    } */

    public function Getlistado($id, $tipo){
        if ($tipo)
            {$sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = ? ORDER BY nombre ASC");
            $sentencia->execute(array($id, $tipo));
        }else{
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? ORDER BY nombre ASC");
            $sentencia->execute(array($id));
        }
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
}