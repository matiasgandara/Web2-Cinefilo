<?php
require_once "./models/model.user.php";
require_once "./views/views.user.php";

class UserController {

    private $model;
    private $view;

	function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
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

    public function Login(){
        $this->view->DisplayLogin();
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_REGISTRO);
    }

    
}
