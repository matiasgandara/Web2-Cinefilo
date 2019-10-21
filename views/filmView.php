<?php 
require_once('libs/Smarty.class.php');

class FilmView {

    function __construct(){
        
    }

    public function DisplayPeliculas($film){
        $smarty = new Smarty();
        $smarty->assign('lista_peliculas',$film);
        $smarty->display('templates/peliculas.tpl');
    }

    public function DisplaySeries($film){
        $smarty = new Smarty();
        $smarty->assign('lista_peliculas',$film);
        $smarty->display('templates/series.tpl');
    }
   
}