<?php


class FilmModel{
    private $db;


    public function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

    public function GetCategorias(){
        $sentencia = $this->db->prepare("SELECT * from film");
        $sentencia->execute();
        $films = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $films;
    }

    public function GetCategoria($id){
            $sentencia = $this->db->prepare("SELECT FROM film WHERE id = ?");
            $sentencia->execute(array($id));
            $film = $sentencia->fetch(PDO::FETCH_OBJ);
            return $film;
    }
}