<?php 
require_once('libs/Smarty.class.php');

class HomeView {

    function __construct(){

    }

    public function DisplayHome(){
        $smarty = new Smarty();
        $smarty->display('templates/principal.tpl');
    }

    public function DisplayLogin($id){

        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/homelogued.tpl');
    }
    
    public function displayNos(){
        $smarty = new Smarty();
        $smarty->display('templates/nosotros.tpl');
    }

    public function displayServicios(){
        $smarty = new Smarty();
        $smarty->display('templates/servicios.tpl');
    }
}