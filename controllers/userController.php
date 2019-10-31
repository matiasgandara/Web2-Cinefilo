<?php
require_once "./models/userModel.php";
require_once "./helpers/loginHelper.php";

class UserController {

	function __construct(){
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    public function IniciarSesion(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $username = $this->model->GetPassword($user);

        if (!empty($username) && password_verify($pass, $username->clave)){
            $this->authHelper->login($username);
            header('Location: logged');
        }else{
            header("Location: " . BASE_URL);
        }
       // header("Location: " . BASE_URL);
    }

    public function logout() {
        $this->authHelper->logout();
        header('Location: ' . BASE_URL);
    }

    
}

