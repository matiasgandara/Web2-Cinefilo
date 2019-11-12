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
        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasAdmin($film,$categorias,$user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasLogged($film,$categorias,$user);        
        }else{
            $this->view->DisplayPeliculas($film,$categorias);
        }
    }

    public function getPelicula($params = null){
        $id = $params[':ID'];
        $film = $this->model->getFilm($id);
        $imagen = $this->model->getImagenes($id);
        $comentarios = $this->model->getComentarios($id);

        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculaAdmin($film, $imagen,$comentarios, $user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPelicula($film, $imagen,$comentarios, $user);
        }else{
            header("Location: " . BASE_URL);
        }
    }

    public function getSerie($params = null){
        $id = $params[':ID'];
        $film = $this->model->getFilm($id);
        $imagen = $this->model->getImagenes($id);
        $comentarios = $this->model->getComentarios($id);

        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySerieAdmin($film, $imagen,$comentarios, $user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySerie($film, $imagen,$comentarios, $user);
        }else{
            header("Location: " . BASE_URL);
        }
    }

    public function getPeliculasId($params = null){
        $id = $params[':ID'];
        $film = $this->model->getPeliculasId($id);
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasAdmin($film,$categorias,$user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculasLogged($film,$categorias,$user);
        }else{
            $this->view->DisplayPeliculas($film, $categorias);
        }
    }

    public function getSeries(){
        $film = $this->model->getSeries();
        $categorias = $this->modelcat->getCategorias();
        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySeriesAdmin($film,$categorias,$user);
        }elseif ($this->helper->checkLoggedIn()) {
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
        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySeriesAdmin($film,$categorias,$user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySeriesLogged($film,$categorias,$user);
        }else{
            $this->view->DisplaySeries($film, $categorias);
        }
    }
    
    public function editarPelicula($params = null){
        $id = $params[':ID'];
        if($this->helper->checkAdmin()){
            $this->model->editarPelicula($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion']);
            header("Location: " . PELICULAS);
        }else{
            header("Location: " . PELICULAS);
        }
    }

    public function editarSerie($params = null){
        $id = $params[':ID'];
        if($this->helper->checkAdmin()){
            $this->model->editarSerie($id,$_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas']);
            header("Location: " . SERIES);
        }else{
            header("Location: " . SERIES);
        }
    }
     
    public function borrarPelicula($params = null){
        $id = $params[':ID'];
        if($this->helper->checkAdmin()){
            $this->model->borrarFilm($id);
            header("Location: " . PELICULAS);
        }else{
            header("Location: " . PELICULAS);
        }
    }

    public function borrarSerie($params = null){
        $id = $params[':ID'];
        if($this->helper->checkAdmin()){
            $this->model->borrarFilm($id);
            header("Location: " . SERIES);
        }else{
            header("Location: " . SERIES);
        }
    }

    public function insertarPelicula(){
        if($this->helper->checkLoggedIn()){
            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {
                    $this->model->insertarPelicula($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_FILES['imagen']);
                    header("Location: " . PELICULAS); 
                }else{
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }else{
                $this->model->insertarPelicula($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion']);
                header("Location: " . PELICULAS); 
            }
        }else{
            header("Location: " . PELICULAS); 
            }
        }    
    
        public function insertarSerie(){
            if($this->helper->checkLoggedIn()){
                if ($_FILES['imagen']['name']) {
                    if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {
                        $this->model->insertarSerie($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas'],$_FILES['imagen']);
                        header("Location: " . SERIES); 
                    }else{
                        $this->view->showError("Formato no aceptado");
                        die();
                    }
                }else{
                    $this->model->insertarSerie($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas']);
                    header("Location: " . SERIES); 
                }
        }else{
        header("Location: " . SERIES); 
        }
    }
      

}