<?php 
require('libs/Smarty.class.php');

class CategoriasView {

    function __construct(){

    }

    public function DisplayCategorias($categoria){

        $smarty = new Smarty();
        $smarty->assign('genero',"GENERO");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_categorias',$categoria);
        $smarty->display('templates/ver_categorias.tpl');
    }
}
