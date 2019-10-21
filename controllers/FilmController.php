<?php
require_once "./models/filmModel.php";
require_once "./views/filmView.php";

class filmController{
    private $model;
    private $view;

	function __construct(){
        $this->model = new filmModel();
        $this->view = new filmView();
    }

    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    
    public function GetPeliculas($id){
        $film = $this->model->getPeliculas($id);
        $this->view->DisplayPeliculas($film);
    }

    public function GetSeries($id){
        $film = $this->model->getSeries($id);
        $this->view->DisplaySeries($film);
    }
    

}