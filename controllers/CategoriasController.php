<?php
require_once "./models/model.categorias.php";
require_once "./views/views.categorias.php";

class CategoriasController{
    private $model;
    private $view;

	function __construct(){
        $this->model = new CategoriasModel();
        $this->view = new CategoriasView();
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



    public function getCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->displayCategorias($categorias);
    }

    public function setCategorias(){

    }

}