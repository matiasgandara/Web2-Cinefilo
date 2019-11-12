<?php
    require_once("Router.php");
/*     require_once("controllers/homeController.php"); */

    require_once("./api/filmApiController.php");
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    // recurso solicitado
    $resource = $_GET["resource"];

    // método utilizado
    $method = $_SERVER["REQUEST_METHOD"];
    
    $router = new Router();

    // rutas
    /* 
    $router->addRoute("home", "GET", "HomeController", "getHome"); */
    $router->addRoute("comentarios", "GET", "filmApiController", "getComentarios");
    $router->addRoute("peliculas", "GET", "filmApiController", "getPeliculas");
    $router->addRoute("pelicula/:ID","GET","filmApiController", "getFilm");
    $router->addRoute("peliculas/:ID", "GET", "filmApiController", "getPeliculasId");
    $router->addRoute("series", "GET", "filmApiController", "getSeries");
    $router->addRoute("serie/:ID","GET","filmApiController", "getFilm");
    $router->addRoute("series/:ID", "GET", "filmApiController", "getSeriesId");
    $router->addRoute("eliminar/:ID", "DELETE", "filmApiController", "BorrarFilm");
    $router->addRoute("editar_pelicula/:ID", "PUT", "filmApiController", "editarPelicula");
    $router->addRoute("editar_serie/:ID", "PUT", "filmApiController", "editarSerie");
    $router->addRoute("insertar_pelicula", "POST", "filmApiController", "insertarPelicula");
    $router->addRoute("insertar_serie", "POST", "filmApiController", "insertarSerie");


    //run
    $router->route($resource, $method); 
