<?php


class filmModel extends PDO{



    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinefilo;charset=utf8', 'root', '');
    }

    public function get($id) {
        $query = $this->db->prepare("SELECT * FROM film WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function getPeliculasId($id){
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = 'peliculas' ORDER BY nombre ASC");
            $sentencia->execute(array($id));
            $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
    }

    public function getPeliculas(){
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'peliculas' ORDER BY nombre ASC");
            $sentencia->execute();
            $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
    }

    public function getSeriesId($id){
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute(array($id));
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $series;
    }

    public function getSeries(){
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute();
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $series;
    }

    public function insertarPelicula($genero,$nombre,$sinopsis,$duracion,$nombre_imagen){

        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, duracion, tipo, nombre_imagen) VALUES(?,?,?,?,'peliculas',?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$duracion,$nombre_imagen));
    }

    public function insertarSerie($genero,$nombre,$sinopsis,$episodios,$temporadas,$nombre_imagen){

        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, episodios, temporadas, tipo, nombre_imagen) VALUES(?,?,?,?,?,'series',?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$nombre_imagen));
    }

    public function borrarFilm($id){
        $sentencia = $this->db->prepare("DELETE FROM film WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function editarPelicula($id,$genero,$nombre,$sinopsis,$duracion,$nombre_imagen){

        $sentencia = $this->db->prepare("UPDATE film SET genero = ?, nombre = ?, sinopsis = ?, duracion = ?, nombre_imagen = ? WHERE id = ?");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$duracion,$nombre_imagen,$id));

    }

    public function editarSerie($id,$genero,$nombre,$sinopsis,$episodios,$temporadas,$nombre_imagen){

        $sentencia = $this->db->prepare("UPDATE film SET genero = ?, nombre = ?, sinopsis = ?, episodios = ?, temporadas = ?, nombre_imagen = ? WHERE id = ?");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$nombre_imagen,$id));

    }
    
}
?>