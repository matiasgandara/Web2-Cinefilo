<?php 
require_once('libs/Smarty.class.php');

class FilmView {

    function __construct(){
        
    }

    public function DisplayPeliculas($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_peliculas',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/peliculas.tpl');
    }

    public function DisplayPeliculasLogged($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_peliculas',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/peliculaslogged.tpl');
    }

    public function DisplaySeries($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/series.tpl');
    }
   
    public function DisplaySeriesLogged($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/serieslogged.tpl');
    }
    

}