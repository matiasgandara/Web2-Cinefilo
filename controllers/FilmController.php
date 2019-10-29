<?php
require_once "./models/filmModel.php";
require_once "./models/categoriasModel.php";
require_once "./views/filmView.php";
require_once "./helpers/loginHelper.php";

class filmController{
    private $model;
    private $modelcat;
    private $view;

	function __construct(){
        $this->model = new filmModel();
        $this->modelcat = new categoriasModel();
        $this->view = new filmView();
        $this->helper = new AuthHelper();
    }

   
    public function GetPeliculas(){
        $film = $this->model->getPeliculas();
        $categorias = $this->modelcat->getCaterias();
        $this->view->DisplayPeliculas($film,$categorias);
    }

    public function GetPeliculasId($params = null){
        $id = $params[':ID'];
        $film = $this->model->getPeliculasId($id);
        $categorias = $this->modelcat->getCaterias();
        $this->view->DisplayPeliculas($film,$categorias);
    }

    public function GetSeries(){
        $film = $this->model->getSeries();
        $categorias = $this->modelcat->getCaterias();
        $this->view->DisplaySeries($film,$categorias);
    }

    public function GetSeriesId(($params = null){
        $id = $params[':ID'];
        $film = $this->model->getSeriesId($id);
        $categorias = $this->modelcat->getCaterias();
        $this->view->DisplaySeries($film,$categorias);
    }
    
    public function EditarPelicula($params = null){
        $id = $params[':ID'];
        $this->helper->checkLogIn();
        $this->model->editarPelicula($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_POST['nombre_imagen']);
        header("Location: " . PELICULAS_ADMIN);
    }

    public function EditarSerie($params = null){
        $id = $params[':ID'];
        $this->helper->checkLogIn();
        $this->model->editarSerie($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas'],$_POST['nombre_imagen']);
        header("Location: " . SERIES_ADMIN);
    }
     
    public function BorrarFilm($params = null){
        $id = $params[':ID'];
        $this->helper->checkLogIn();
        $this->model->borrarFilm($id);
        header("Location: " . BASE_URL);
    }

    public function IngresarPelicula(){
        $this->helper->checkLogIn();
        $this->model->insertarPelicula($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_POST['nombre_imagen']);
        header("Location: " . PELICULAS_ADMIN); 
    }    

    public function IngresarSerie(){
        $this->helper->checkLogIn();
        $this->model->insertarSerie($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas'],$_POST['nombre_imagen']);
        header("Location: " . SERIES_ADMIN); 
    }  

}