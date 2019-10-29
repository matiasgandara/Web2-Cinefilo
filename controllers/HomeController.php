<?php
require_once "./views/homeView.php";
require_once "./models/userModel.php";
require_once "./helpers/loginHelper.php";

class homeController{
    private $view;

	function __construct(){
        $this->view = new homeView();
        $this->model = new userModel();
        $this->helper = new AuthHelper();
        
    }
    

    public function getHome(){

        if ($this->helper->checkLogIn()){
            session_start();
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayLogin($user);
        }else{
            $this->view->DisplayHome();
        }


    }

    public function displayNos(){
        $this->view->displayNos();
    }

    public function displayServicios(){
        $this->view->displayServicios();
    }

}