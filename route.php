<?php


require_once "controllers/HomeController.php";
require_once "controllers/FilmController.php";
require_once "controllers/userController.php";
require_once 'Router.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("PELICULAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/peliculas');
define("SERIES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/series');
define("EDITAR_PELICULA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editar_pelicula');
define("EDITAR_SERIE", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/editar_serie');
define("INSERTAR_PELICULA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/insertar_pelicula');
define("INSERTAR_SERIE", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/insertar_serie');
define("BORRAR_PELICULA", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/borrar_pelicula');
define("BORRAR_SERIE", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/borrar_serie');
define("NOSOTROS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/nosotros');
define("CATEGORIAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/categorias');
define("USUARIOS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/usuarios');



$r = new Router();

$r->addRoute("logged", "GET", "HomeController", "getHome");
$r->addRoute("login", "POST", "userController", "IniciarSesion");
$r->addRoute("logout", "GET", "userController", "logout");
$r->addRoute("registro", "GET", "userController", "registrar");
$r->addRoute("registrar", "POST", "userController", "registro");
$r->addRoute("peliculas", "GET", "FilmController", "getPeliculas");
$r->addRoute("pelicula/:ID", "GET", "FilmController", "getPelicula");
$r->addRoute("peliculas/:ID", "GET", "FilmController", "getPeliculasId");
$r->addRoute("series", "GET", "FilmController", "getSeries");
$r->addRoute("serie/:ID", "GET", "FilmController", "getSerie");
$r->addRoute("series/:ID", "GET", "FilmController", "getSeriesId");
$r->addRoute("eliminar/:ID", "GET", "FilmController", "BorrarFilm");
$r->addRoute("editar_pelicula/:ID", "POST", "FilmController", "editarPelicula");
$r->addRoute("editar_serie/:ID", "POST", "FilmController", "editarSerie");
$r->addRoute("insertar_pelicula", "POST", "FilmController", "insertarPelicula");
$r->addRoute("insertar_serie", "POST", "FilmController", "insertarSerie");
$r->addRoute("insertar_imagenes/:ID", "POST", "FilmController", "insertarImagenes");
$r->addRoute("eliminarImagen/:ID", "GET", "FilmController", "BorrarImagen");
$r->addRoute("borrar_pelicula/:ID", "GET", "FilmController", "borrarPelicula");
$r->addRoute("borrar_serie/:ID", "GET", "FilmController", "borrarSerie");
$r->addRoute("nosotros", "GET", "HomeController", "displayNos");
$r->addRoute("servicios", "GET", "HomeController", "displayServicios");
$r->addRoute("categorias", "GET", "FilmController", "getCategorias");
$r->addRoute("borrar_categoria/:ID", "GET", "FilmController", "borrarCategoria");
$r->addRoute("editar_categoria/:ID", "POST", "FilmController", "modificarCategoria");
$r->addRoute("insertar_categoria", "POST", "FilmController", "insertarCategoria");
$r->addRoute("usuarios", "GET", "userController", "getUsuarios");
$r->addRoute("borrar_usuario/:ID", "GET", "UserController", "borrarUser");
$r->addRoute("darAdmin/:ID", "GET", "userController", "darAdmin");
$r->addRoute("quitarAdmin/:ID", "GET", "userController", "quitarAdmin");

 //Ruta por defecto.
 $r->setDefaultRoute("HomeController", "getHome");

 $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);