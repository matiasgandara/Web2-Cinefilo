<?php
require_once "./views/homeView.php";
require_once "./models/userModel.php";

class homeController{
    private $view;

	function __construct(){
        $this->view = new homeView();
        $this->model = new userModel();
    }
    

    public function GetHome(){

        if ($this->checkLogIn()){
            session_start();
            $this->view->DisplayLogin($_SESSION['user']);
        }else{
            $this->view->DisplayHome();
        }


    }

}