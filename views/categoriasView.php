<?php 
require_once('libs/Smarty.class.php');
require_once('userView.php');

class categoriasView {

    function __construct(){

    }

    public function DisplayLogin(){

        session_start();
        $id = $_SESSION['userId']

        $smarty = new Smarty();
        $smarty->assign('idlogin', $id);
        $smarty->display('templates/ver_categorias.tpl');
    }

/*     public function DisplayCategorias($categoria){

        $smarty = new Smarty();
        $smarty->assign('genero',"GENERO");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_categorias',$categoria);
        $smarty->display('templates/ver_categorias.tpl');
    } */
}
