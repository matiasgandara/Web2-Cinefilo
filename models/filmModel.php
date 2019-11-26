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
            $peliculas = $sentencia->fetch(PDO::FETCH_OBJ);
            return $peliculas;
    }

    public function getPeliculas(){
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'peliculas' ORDER BY nombre ASC");
            $sentencia->execute();
            $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $peliculas;
    }

    public function getFilm($id){
            $sentencia = $this->db->prepare("SELECT * from film WHERE id = ?");
            $sentencia->execute(array($id));
            $film = $sentencia->fetch(PDO::FETCH_OBJ);
            return $film;
    }

    public function getSeriesId($id){
            $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute(array($id));
            $series = $sentencia->fetch(PDO::FETCH_OBJ);
            return $series;
    }

    public function getSeries(){
            $sentencia = $this->db->prepare("SELECT * from film WHERE tipo = 'series' ORDER BY nombre ASC");
            $sentencia->execute();
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $series;
    }

    public function insertarPelicula($genero,$nombre,$sinopsis,$duracion,$imagen = null){
        $filepath = null;
        if ($imagen)
            $filepath = $this->uploadImage($imagen);

        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, duracion, tipo, nombre_imagen) VALUES(?,?,?,?,'peliculas',?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$duracion,$filepath));
    }

    public function insertarSerie($genero,$nombre,$sinopsis,$episodios,$temporadas,$imagen = null){
        $filepath = null;
        if ($imagen)
            $filepath = $this->uploadImage($imagen);


        $sentencia = $this->db->prepare("INSERT INTO film (genero, nombre, sinopsis, episodios, temporadas, tipo, nombre_imagen) VALUES(?,?,?,?,?,'series',?)");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$filepath));
    }

    public function borrarFilm($id){
        $sentencia = $this->db->prepare("DELETE FROM film WHERE id=?");
        $sentencia->execute(array($id));
    }

    public function editarPelicula($id,$genero,$nombre,$sinopsis,$duracion){

        $sentencia = $this->db->prepare("UPDATE film SET genero = ?, nombre = ?, sinopsis = ?, duracion = ? WHERE id = ?");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$duracion,$id));

    }

    public function editarSerie($id,$genero,$nombre,$sinopsis,$episodios,$temporadas){

        $sentencia = $this->db->prepare("UPDATE film SET genero = ?, nombre = ?, sinopsis = ?, episodios = ?, temporadas = ? WHERE id = ?");
        $sentencia->execute(array($genero,$nombre,$sinopsis,$episodios,$temporadas,$id));

    }

    public function getImagenes($id){
        $sentencia = $this->db->prepare("SELECT * from galeria WHERE id_film = ?");
        $sentencia->execute(array($id));
        $imagenes = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $imagenes;
    }

    public function addImagenes($id,$image){
        if ($image){
            $sentencia = $this->db->prepare("INSERT INTO galeria (id_film, dir_imagen) VALUES(?,?)");
            foreach($_FILES["imagenes"]["tmp_name"] as $key => $tmp_name){
            $pathImg = $this->uploadImage($tmp_name);
            $sentencia->execute(array($id, $pathImg));
            }
        }
    }

    private function uploadImage($image){
        $target = 'image/' . uniqid() . '.' . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    public function getComentarios($id){
        $sentencia = $this->db->prepare("SELECT * from comentarios WHERE id_film = ? ");
        $sentencia->execute(array($id));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    public function getComentario($id){
        $sentencia = $this->db->prepare("SELECT * from comentarios WHERE id = ? ");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }

}
