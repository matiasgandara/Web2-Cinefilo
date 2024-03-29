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

    public function DisplayPeliculasAdmin($film,$categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $user);
        $smarty->assign('lista_peliculas',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/peliculasadmin.tpl');
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

    public function DisplaySeriesAdmin($film,$categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $user);
        $smarty->assign('lista_series',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/seriesadmin.tpl');
    }
   
    public function DisplaySeriesLogged($film,$categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('idlogin', $user);
        $smarty->assign('lista_series',$film);
        $smarty->assign('lista_categoria',$categorias);
        $smarty->display('templates/serieslogged.tpl');
    }

    public function DisplayPelicula($film, $imagenes, $user,$promedio){
        $smarty = new Smarty();
        $smarty->assign('film', $film);
        $smarty->assign('imagenes', $imagenes);
        $smarty->assign('idlogin', $user);
        $smarty->assign('promedio', $promedio);
        $smarty->display('templates/pelicula.tpl');
    }

    public function DisplaySerie($film, $imagenes, $user,$promedio){
        $smarty = new Smarty();
        $smarty->assign('film', $film);
        $smarty->assign('imagenes', $imagenes);
        $smarty->assign('idlogin', $user);
        $smarty->assign('promedio', $promedio);
        $smarty->display('templates/serie.tpl');
    }
    public function DisplayPeliculaAdmin($film, $imagenes,$user,$promedio){
        $smarty = new Smarty();
        $smarty->assign('film', $film);
        $smarty->assign('imagenes', $imagenes);
        $smarty->assign('idlogin', $user);
        $smarty->assign('promedio', $promedio);
        $smarty->display('templates/peliculaadmin.tpl');
    }

    public function DisplaySerieAdmin($film, $imagenes,$user,$promedio){
        $smarty = new Smarty();
        $smarty->assign('film', $film);
        $smarty->assign('imagenes', $imagenes);
        $smarty->assign('idlogin', $user);
        $smarty->assign('promedio', $promedio);
        $smarty->display('templates/serieadmin.tpl');
    }
    
    public function DisplayCategorias($categorias,$user){
        $smarty = new Smarty();
        $smarty->assign('categorias', $categorias);
        $smarty->assign('idlogin', $user);
        $smarty->display('templates/categorias.tpl');
    }

    public function showError($error,$user){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->assign('idlogin', $user);
        $smarty->display('templates/error.tpl');
    }

}