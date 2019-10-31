<?php 
require_once('libs/Smarty.class.php');

class HomeView {

    function __construct(){

    }

    public function DisplayHome(){
        $smarty = new Smarty();
        $smarty->display('templates/principal.tpl');
    }

    public function DisplayLogged($id){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/homelogged.tpl');
    }
    
    public function displayNos(){
        $smarty = new Smarty();
        $smarty->display('templates/nosotros.tpl');
    }

    public function displayServicios(){
        $smarty = new Smarty();
        $smarty->display('templates/servicios.tpl');
    }

    public function displayNosLogged($id){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/nosotrosLogged.tpl');
    }
    
    public function displayServiciosLogged($id){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/serviciosLogged.tpl');
    }
}