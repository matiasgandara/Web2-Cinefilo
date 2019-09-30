<?php
require_once "./models/model.film.php";
require_once "./views/views.film.php";

class FilmController{
    private $model;
    private $view;

	function __construct(){
        $this->model = new FilmModel();
        $this->view = new FilmView();
    }
    
    public function GetFilm(){
        $film = $this->model->GetFilm();
        $this->view->DisplayFilm($film);
    }

}