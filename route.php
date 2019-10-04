<?php


require_once "Controllers/CategoriasController.php";
require_once "Controllers/FilmController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registro');
define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/series');
define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/peliculas');

$controllercat = new CategotriasController();
$controllerfilm = new FilmController();

if($action == ''){
    $controller->GetCategorias();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0] == "categorias"){
            $controllercat->GetCategorias();
        }elseif($partesURL[0] == "series") {
            $controllerfilm->GetFilm($partesURL[1]);
        }elseif($partesURL[0] == "peliculas") {
            $controllerfilm->GetFilm($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->DelFilm($partesURL[1]);
        }elseif($partesURL[0] == "agregar") {
            $controller->AddFilm($partesURL[1]);
        }
    }
}

?>