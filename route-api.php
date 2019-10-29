<?php
    require_once('Router.php');
    require_once('./api/filmApiController.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    
    
    $router->addRoute("/peliculas", "GET", "filmApiController", "getPeliculas");
    $router->addRoute("/peliculas/:ID", "GET", "filmApiController", "getPeliculasId");
    $router->addRoute("/peliculas_admin", "GET", "filmApiController", "getPeliculas");
    $router->addRoute("/peliculas_admin/:ID", "GET", "filmApiController", "getPeliculasId");
    $router->addRoute("/series", "GET", "filmApiController", "getSeries");
    $router->addRoute("/series/:ID", "GET", "filmApiController", "getSeriesId");
    $router->addRoute("/series_admin", "GET", "filmApiController", "getSeries");
    $router->addRoute("/series_admin:/ID", "GET", "filmApiController", "getSeriesId");
    $router->addRoute("/eliminar/:ID", "DELETE", "filmApiController", "BorrarFilm");
    $router->addRoute("/editar_pelicula/:ID", "PUT", "filmApiController", "editarPelicula");
    $router->addRoute("/editar_serie/:ID", "PUT", "filmApiController", "editarSerie");
    $router->addRoute("/insertar_pelicula", "POST", "filmApiController", "insertarPelicula");
    $router->addRoute("/insertar_serie", "POST", "filmApiController", "insertarSerie");
}

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
