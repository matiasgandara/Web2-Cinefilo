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

    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    
    public function GetFilms(){
        $film = $this->model->GetFilm();
        $this->view->DisplayFilm($film);
    }
    

}