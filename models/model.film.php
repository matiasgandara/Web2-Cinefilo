<?php


class FilmModel{
    private $db;


    public function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

    /* public function Getfilms(){
        $sentencia = $this->db->prepare("SELECT * from film ORDER BY nombre ASC");
        $sentencia->execute();
        $films = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $films;
    } */

    public function GetCategoria($genero){
            $sentencia = $this->db->prepare("SELECT * FROM film WHERE genero = ? ORDER BY nombre ASC");
            $sentencia->execute(array($id));
            $film = $sentencia->fetch(PDO::FETCH_OBJ);
            return $film;
    }

    public function GetFilms($id, $tipo){
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

    public function InsertarFilm($genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo){

        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, episodios, temporadas, duracion, tipo, nombre_imagen) VALUES(?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombreimagen));
    }

    public function BorrarFilm($id){
        $sentencia = $this->db->prepare("DELETE FROM film WHERE id=?");
        $sentencia->execute(array($id));
    }
    
}