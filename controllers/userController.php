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
    


    public function registrarUsuario(){
        $user = $_POST['user'];
        
        $password1 = $_POST['pass1'];
        $password2 = $_POST['pass2'];

        if(isset($usuario) && $usuario != null && $password1 == $password2){
            $this->model->Registro($user, $password1);
        }else{
            header("Location: " . URL_REGISTRO);
        }
    }

/*     public function Login(){
        $this->view->DisplayLogin();
    }
 */
    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_REGISTRO);
    }

    
}

