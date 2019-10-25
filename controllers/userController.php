<?php
require_once "./models/userModel.php";
require_once "./views/userView.php";

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
            header("Location: " . LOGGED);
        }else{
            header("Location: " . REGISTRO);
        }
       // header("Location: " . BASE_URL);
    }


    public function registrarUsuario(){
        $user = $_POST['user'];
        
        $password1 = $_POST['pass1'];
        $password2 = $_POST['pass2'];

        if(isset($usuario) && $usuario != null && $password1 == $password2){
            $hash = password_hash($password1, PASSWORD_DEFAULT);
            $this->model->Registro($user, $hash);
        }else{
            header("Location: " . URL_REGISTRO);
        }
    }

    public function registrar(){
        $this->view->DisplayRegistro();
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

    
}

