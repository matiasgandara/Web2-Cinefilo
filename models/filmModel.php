<?php


class filmModel{
    private $db;


    public function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8','root','');
    }

/*     public function getfilms(){
        $sentencia = $this->db->prepare("SELECT * from film ORDER BY nombre ASC");
        $sentencia->execute();
        $films = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $films;
    } */
    public function get($id) {
        $query = $this->db->prepare('SELECT * FROM film WHERE id = ?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function getPeliculas($id){
        if ($id){
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = 'peliculas' ORDER BY nombre ASC");
            $sentencia->execute(array($id));
        }else{
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'peliculas' ORDER BY nombre ASC");
            $sentencia->execute();
        }

        $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSeries($id){
        if ($id){
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute(array($id));
        }else{
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute();
        }
        $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertarFilm($genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombre_imagen){

        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, episodios, temporadas, duracion, tipo, nombre_imagen) VALUES(?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombre_imagen));
    }

    public function borrarFilm($id){
        $sentencia = $this->db->prepare("DELETE FROM film WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function editarFilm($id,$genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombre_imagen){

        $sentencia = $this->db->prepare("UPDATE film SET genero = ?, nombre = ?, sinopsis = ?, episodios = ?, temporadas = ?, duracion = ?, tipo = ?, nombre_imagen = ? WHERE id = ?");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombre_imagen,$id));

    }
    
}