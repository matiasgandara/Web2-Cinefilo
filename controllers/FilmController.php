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

   
    public function getPeliculas(){
        $film = $this->model->getPeliculas();
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasLogged($film,$categorias,$user);
        }else{
            $this->view->DisplayPeliculas($film,$categorias);
        }
    }

    public function getPeliculasId($params = null){
        $id = $params[':ID'];
        $film = $this->model->getPeliculasId($id);
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasLogged($film,$categorias,$user);
        }else{
            $this->view->DisplayPeliculas($film,$categorias);
        }
    }

    public function getSeries(){
        $film = $this->model->getSeries();
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySeriesLogged($film,$categorias,$user);
        }else{
            $this->view->DisplaySeries($film,$categorias);
        }
    }

    public function getSeriesId($params = null){
        $id = $params[':ID'];
        $film = $this->model->getSeriesId($id);
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkLoggedIn()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySeriesLogged($film,$categorias,$user);
        }else{
            $this->view->DisplaySeries($film,$categorias);
        }
    }
    
    public function editarPelicula($params = null){
        $id = $params[':ID'];
        if($this->helper->checkLoggedIn()){
            $this->model->editarPelicula($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_POST['nombre_imagen']);
            header("Location: " . PELICULAS_ADMIN);
        }else{
            header("Location: " . PELICULAS);
        }
    }

    public function editarSerie($params = null){
        $id = $params[':ID'];
        if($this->helper->checkLoggedIn()){
            $this->model->editarSerie($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas'],$_POST['nombre_imagen']);
            header("Location: " . SERIES_ADMIN);
        }else{
            header("Location: " . SERIES);
        }
    }
     
    public function borrarPelicula($params = null){
        $id = $params[':ID'];
        if($this->helper->checkLoggedIn()){
            $this->model->borrarFilm($id);
            header("Location: " . PELICULAS_ADMIN);
        }else{
            header("Location: " . PELICULAS);
        }
    }

    public function borrarSerie($params = null){
        $id = $params[':ID'];
        if($this->helper->checkLoggedIn()){
            $this->model->borrarFilm($id);
            header("Location: " . SERIES_ADMIN);
        }else{
            header("Location: " . SERIES);
        }
    }

    public function insertarPelicula(){
        $this->helper->checkLoggedIn();
        $this->model->insertarPelicula($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_POST['nombre_imagen']);
        header("Location: " . PELICULAS_ADMIN); 
    }    

    public function insertarSerie(){
        $this->helper->checkLoggedIn();
        $this->model->insertarSerie($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas'],$_POST['nombre_imagen']);
        header("Location: " . SERIES_ADMIN); 
    }  

}