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

    public function  getPeliculas($params = null) {

        $id = $params[':ID'];
        $films = $this->model->getPeliculas($id);
        $this->view->response($films, 200);
    }

    public function  getSeries($params = null) {

        $id = $params[':ID'];
        $films = $this->model->getSeries($id);
        $this->view->response($films, 200);
    }

    
    public function deleteFilm($params = null) {
        $id = $params[':ID'];
        $film = $this->model->get($id);
        if ($film) {
            $this->model->borrarFilm($id);
            $this->view->response("El film fue borrada con exito.", 200);
        } else
            $this->view->response("El film con el id={$id} no existe", 404);
    }

    public function addFilm($params = null) {
        $data = $this->getData();

        $id = $this->model->insertarFilm($data->genero, $data->nombre, $data->sinopsis, $data->episodios, $data->temporadas, $data->duracion, $data->tipo);
        
        $film = $this->model->get($id);
        if ($film)
            $this->view->response($film, 200);
        else
            $this->view->response("El film no fue creada", 500);

    }

    public function updateTask($params = null) {
        $id = $params[':ID'];
        $data = $this->getData();
        
        $film = $this->model->get($id);
        if ($film) {
            $this->model->editarFilm($id,$genero,$nombre,$sinopsis,$episodios,$temporadas,$duracion,$tipo,$nombreimagen);
            $this->view->response("El film fue modificada con exito.", 200);
        } else
            $this->view->response("El film con el id={$id} no existe", 404);
    }
}
