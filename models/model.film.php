<?php


class FilmModel{
    private $db;


    public function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

    public function Getfilms(){
        $sentencia = $this->db->prepare("SELECT * from film ORDER BY nombre ASC");
        $sentencia->execute();
        $films = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $films;
    }

    public function GetCategoria($genero){
            $sentencia = $this->db->prepare("SELECT * FROM film WHERE genero = ? ORDER BY nombre ASC");
            $sentencia->execute(array($id));
            $film = $sentencia->fetch(PDO::FETCH_OBJ);
            return $film;
    }

    public function GetTipoFilm($tipo){
        $sentencia + $this->db->prepare("SELECT * FROM film WHERE tipo = ? ORDER BY nombre ASC");
        $sentencia->execute(array($tipo));
        $film = $sentencia->fetch(PDO::FETCH_OBJ);
        return $film;
    }

    
}