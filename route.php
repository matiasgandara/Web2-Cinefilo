<?php


require_once "controllers/CategoriasController.php";
require_once "controllers/FilmController.php";
require_once "controllers/userController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/home');
define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registro');
define("URL_SERIES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/series');
define("URL_PELICULAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/peliculas');

$controllercat = new categotriasController();
$controllerfilm = new filmController();
$controlleruser = new userController();

if($action == ''){
    $controller->GetCategorias();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0] == "home"){
            $controllercat->GetHome();
        }elseif($partesURL[0] == "series") {
            $controllerfilm->GetFilm($partesURL[1]);
        }elseif($partesURL[0] == "peliculas") {
            $controllerfilm->GetFilm($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controllerfilm->DelFilm($partesURL[1]);
        }elseif($partesURL[0] == "agregar") {
            $controllerfilm->AddFilm($partesURL[1]);
        }elseif($partesURL[0] == "registro") {
            $controlleruser->AddFilm($partesURL[1]);
        }
    }
}

?>