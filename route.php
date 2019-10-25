<?php


require_once('controllers/HomeController.php');
require_once('controllers/FilmController.php');
require_once('controllers/userController.php');
require_once('Router.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGGED", BASE_URL . 'logged');
define("LOGIN", BASE_URL . 'login');
define("LOGOUT", BASE_URL . 'logout');
define("REGISTRO", BASE_URL . 'registro');
define("PELICULAS", BASE_URL . 'peliculas');
define("PELICULAS_ADMIN", BASE_URL . 'peliculas_admin');
define("SERIES", BASE_URL . 'series');
define("SERIES_ADMIN", BASE_URL . 'series_admin');
define("NOSOTROS", BASE_URL . 'nosotros');
define("SERVICIOS", BASE_URL . 'servicios');

$r = new Router();

$r->addRoute("", "GET", "HomeController", "getHome");
$r->addRoute("logged", "GET", "HomeController", "getHome");
$r->addRoute("LOGIN", "POST", "userController", "IniciarSesion");
$r->addRoute("logout", "GET", "userController", "logout");
$r->addRoute("registro", "POST", "userController", "registrarUsuario");
$r->addRoute("peliculas", "GET", "FilmController", "getPeliculas");
$r->addRoute("peliculas/:ID", "GET", "FilmController", "getPeliculas");
$r->addRoute("peliculas_admin", "GET", "FilmController", "getPeliculas");
$r->addRoute("series", "GET", "FilmController", "getSeries");
$r->addRoute("series/:ID", "GET", "FilmController", "getSeries");
$r->addRoute("series_admin", "GET", "FilmController", "getSeries");
$r->addRoute("eliminar/:ID", "GET", "TaskController", "deleteTask");
$r->addRoute("finalizar/:ID", "GET", "TaskController", "endTask");
$r->addRoute("nueva", "POST", "TaskController", "addTask");



}
