<?php


require_once "Controllers/CategoriasController.php";
require_once "Controllers/FilmController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$controller = new CategotriasController();

if($action == ''){
    $controller->GetCategorias();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "categorias"){
            $controller->GetCategorias();
        }elseif($partesURL[0] == "film") {
            $controller->GetFilm();
        }elseif($partesURL[0] == "finalizar") {
            $controller->FinalizarTarea($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarTarea($partesURL[1]);
        }
    }
}

?>