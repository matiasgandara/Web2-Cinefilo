<?php
require_once "./views/homeView.php";
require_once "./models/userModel.php";

class homeController{
    private $view;

	function __construct(){
        $this->view = new homeView();
        $this->model = new userModel();
    }
    
    public function IniciarSesion(){
        $password = $_POST['pass'];

        $usuario = $this->model->GetPassword($_POST['user']);

        if (isset($usuario) && $usuario != null && password_verify($password, $usuario->clave)){
            session_start();
            $_SESSION['user'] = $usuario->nombreusuario;
            $_SESSION['userId'] = $usuario->id;
            header("Location: " . BASE_URL);
        }else{
            header("Location: " . URL_REGISTRO);
        }
       // header("Location: " . BASE_URL);
    }

    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            return false;
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            return false;
            die(); 
        } else {
            return true;
        }
        $_SESSION['LAST_ACTIVITY'] = time();
        
    }

    public function GetHome(){

        if (checkLogIn()){
            $this->view->DisplayLogin($_SESSION['userId']);
        }else{
            $this->view->DisplayHome();
        }


    }

