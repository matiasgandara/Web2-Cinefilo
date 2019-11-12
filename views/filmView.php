<?php 
require_once "libs/Smarty.class.php";
require_once "./helpers/loginHelper.php";

class FilmView {

    function __construct(){
        
    }

    public function DisplayPeliculas($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_peliculas',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/peliculas.tpl');
    }

    public function DisplayPeliculasLogged($film,$categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $user);
        $smarty->assign('lista_peliculas',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/peliculaslogged.tpl');
    }

    public function DisplaySeries($film,$categorias){
        $smarty = new Smarty();
        $smarty->assign('lista_series',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/series.tpl');
    }
   
    public function DisplaySeriesLogged($film,$categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $user);
        $smarty->assign('lista_series',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/serieslogged.tpl');
    }
    

}