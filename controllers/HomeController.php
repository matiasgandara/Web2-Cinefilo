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
    

    public function getHome(){

        if($this->helper->checkAdmin){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayAdmin($user);
        }elseif($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayLogged($user);
        }else{
            $this->view->DisplayHome();
        }


    }

    public function displayNos(){
        if ($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->displayNosLogged($user);
        }else{
            $this->view->displayNos();
        }
    }

    public function displayServicios(){
        if ($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->displayServiciosLogged($user);
        }else{
            $this->view->displayServicios();
        }
    }

}