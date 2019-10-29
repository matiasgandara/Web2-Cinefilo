<?php


require_once('controllers/HomeController.php');
require_once('controllers/FilmController.php');
require_once('controllers/userController.php');
require_once('Router.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("HOME", BASE_URL . 'home');
define("LOGGED", BASE_URL . 'logged');
define("LOGIN", BASE_URL . 'login');
define("LOGOUT", BASE_URL . 'logout');
define("REGISTRO", BASE_URL . 'registro');
define("REGISTRAR", BASE_URL . 'registrar');
define("PELICULAS", BASE_URL . 'peliculas');
define("PELICULAS_ADMIN", BASE_URL . 'peliculas_admin');
define("SERIES", BASE_URL . 'series');
define("SERIES_ADMIN", BASE_URL . 'series_admin');
define("EDITAR_PELICULA", BASE_URL . 'editar_pelicula');
define("EDITAR_SERIE", BASE_URL . 'editar_serie');
define("INSERTAR_PELICULA", BASE_URL . 'insertar_pelicula');
define("INSERTAR_SERIE", BASE_URL . 'insertar_serie');
define("NOSOTROS", BASE_URL . 'nosotros');
define("SERVICIOS", BASE_URL . 'servicios');

$r = new Router();

$r->addRoute("home", "GET", "HomeController", "getHome");
$r->addRoute("logged", "GET", "HomeController", "getHome");
$r->addRoute("LOGIN", "POST", "userController", "IniciarSesion");
$r->addRoute("logout", "GET", "userController", "logout");
$r->addRoute("registro", "GET", "userController", "registrar");
$r->addRoute("registrar", "POST", "userController", "registrarUsuario");
$r->addRoute("peliculas", "GET", "FilmController", "getPeliculas");
$r->addRoute("peliculas/:ID", "GET", "FilmController", "getPeliculasId");
$r->addRoute("peliculas_admin", "GET", "FilmController", "getPeliculas");
$r->addRoute("peliculas_admin/:ID", "GET", "FilmController", "getPeliculasId");
$r->addRoute("series", "GET", "FilmController", "getSeries");
$r->addRoute("series/:ID", "GET", "FilmController", "getSeriesId");
$r->addRoute("series_admin", "GET", "FilmController", "getSeries");
$r->addRoute("series_admin:/ID", "GET", "FilmController", "getSeriesId");
$r->addRoute("eliminar/:ID", "GET", "FilmController", "BorrarFilm");
$r->addRoute("editar_pelicula/:ID", "POST", "FilmController", "editarPelicula");
$r->addRoute("editar_serie/:ID", "POST", "FilmController", "editarSerie");
$r->addRoute("insertar_pelicula", "POST", "FilmController", "insertarPelicula");
$r->addRoute("insertar_serie", "POST", "FilmController", "insertarSerie");
$r->addRoute("nosotros", "GET", "HomeController", "displayNos");
$r->addRoute("nosotros", "GET", "HomeController", "displayServicios");

