<?php 
require_once('libs/Smarty.class.php');

class HomeView {

    function __construct(){

    }

    public function DisplayHome(){
        $smarty = new Smarty();
        $smarty->display('templates/home.tpl');
    }

    public function DisplayLogin($id){

        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/homelogued.tpl');
    }
