<?php

require_once('libs/Smarty.class.php');


class UserView {

    function __construct(){

    }

    public function DisplayRegistro(){

        $smarty = new Smarty();
        $smarty->assign('titulo',"registro");
        $smarty->assign('BASE_URL', URL_REGISTRO);
        $smarty->display('templates/registro.tpl');
    }
}

