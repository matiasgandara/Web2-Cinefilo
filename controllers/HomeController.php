<?php
require_once "./views/homeView.php";
require_once "./models/userModel.php";

class homeController{
    private $view;

	function __construct(){
        $this->view = new homeView();
        $this->model = new userModel();
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

        if ($this->checkLogIn()){
            $this->view->DisplayLogin($_SESSION['user']);
        }else{
            $this->view->DisplayHome();
        }


    }

}