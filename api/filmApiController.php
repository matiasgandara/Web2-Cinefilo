<?php
require_once("./models/filmModel.php");
require_once("./api/jsonView.php");

class FilmApiController {

    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new filmModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function  getPeliculasId($params = null) {

        $id = $params[':ID'];
        $films = $this->model->getPeliculasId($id);
        $this->view->response($films, 200);
    }

    public function  getPeliculas() {

        $films = $this->model->getPeliculas();
        $this->view->response($films, 200);
    }

    public function  getSeriesId($params = null) {

        $id = $params[':ID'];
        $films = $this->model->getSeriesId($id);
        $this->view->response($films, 200);
    }

    public function  getSeries() {

        $films = $this->model->getSeries();
        $this->view->response($films, 200);
    }

    
    public function borrarFilm($params = null) {
        $id = $params[':ID'];
        $film = $this->model->get($id);
        if ($film) {
            $this->model->borrarFilm($id);
            $this->view->response("El film fue borrada con exito.", 200);
        } else
            $this->view->response("El film con el id={$id} no existe", 404);
    }

    public function insertarPelicula($params = null) {
        $data = $this->getData();

        $id = $this->model->insertarPelicula($data->genero, $data->nombre, $data->sinopsis, $data->duracion, $data->nombre_imagen);
        
        $film = $this->model->get($id);
        if ($film)
            $this->view->response($film, 200);
        else
            $this->view->response("El film no fue creada", 500);

    }

    public function insertarSerie($params = null) {
        $data = $this->getData();

        $id = $this->model->insertarSerie($data->genero, $data->nombre, $data->sinopsis, $data->episodios,$data->temporadas, $data->nombre_imagen);
        
        $film = $this->model->get($id);
        if ($film)
            $this->view->response($film, 200);
        else
            $this->view->response("El film no fue creada", 500);

    }

    public function editarPelicula($params = null) {
        $id = $params[':ID'];
        $data = $this->getData();
        
        $film = $this->model->get($id);
        if ($film) {
            $this->model->editarPelicula($data->id,$data->genero,$data->nombre,$data->sinopsis,$data->duracion,$data->nombreimagen);
            $this->view->response("El film fue modificada con exito.", 200);
        } else
            $this->view->response("El film con el id={$id} no existe", 404);
    }

    public function editarSerie($params = null) {
        $id = $params[':ID'];
        $data = $this->getData();
        
        $film = $this->model->get($id);
        if ($film) {
            $this->model->editarSerie($data->id,$data->genero,$data->nombre,$data->sinopsis,$data->episodios,$data->temporadas,$data->nombreimagen);
            $this->view->response("El film fue modificada con exito.", 200);
        } else
            $this->view->response("El film con el id={$id} no existe", 404);
    }
}