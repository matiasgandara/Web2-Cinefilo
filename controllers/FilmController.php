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
        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPeliculaAdmin($film, $imagen, $user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplayPelicula($film, $imagen, $user);
        }else{
            header("Location: " . BASE_URL);
        }
    }

    public function getSerie($params = null){
        $id = $params[':ID'];
        $film = $this->model->getFilm($id);
        $imagen = $this->model->getImagenes($id);

        if($this->helper->checkAdmin()){
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySerieAdmin($film, $imagen, $user);
        }elseif ($this->helper->checkLoggedIn()) {
            $user = $this->helper->getLoggedUserName();
            $this->view->DisplaySerie($film, $imagen, $user);
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
            $this->model->editarPelicula($id, $_POST['nombre'],$_POST['sinopsis'],$_POST['duracion']);
            header("Location: " . PELICULAS);
        }else{
            header("Location: " . PELICULAS);
        }
    }

    public function editarSerie($params = null){
        $id = $params[':ID'];
        if($this->helper->checkAdmin()){
            $this->model->editarSerie($id,$_POST['nombre'],$_POST['sinopsis'],$_POST['episodios'],$_POST['temporadas']);
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
            if ($_FILES['nombre_imagen']['name']) {
                if ($_FILES['nombre_imagen']['type'] == "image/jpeg" || $_FILES['nombre_imagen']['type'] == "image/jpg" || $_FILES['nombre_imagen']['type'] == "image/png") {
                    $this->model->insertarPelicula($_POST['genero'],$_POST['nombre'],$_POST['sinopsis'],$_POST['duracion'],$_FILES['nombre_imagen']);
                    header("Location: " . PELICULAS); 
                }else{
                    $user = $this->helper->getLoggedUserName();
                    $this->view->showError("Formato no aceptado",$user);
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
                        $user = $this->helper->getLoggedUserName();
                        $this->view->showError("Formato no aceptado",$user);
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

        public function insertarImagenes($params = null){
            $id = $params[':ID'];
            if($this->helper->checkLoggedIn()){
                if ($_FILES['imagenes']) {
                    foreach($_FILES["imagenes"]["type"] as $key => $imagetype){
                        if (!($imagetype == "image/jpeg" || $imagetype == "image/jpg" || $imagetype == "image/png")) {
                            $user = $this->helper->getLoggedUserName();
                            $this->view->showError("Formato no aceptado",$user);
                            die();
                        }
                    }
                $this->model->addImagenes($id,$_FILES['imagenes']);
                header("Location: " . BASE_URL); 
                }
            }

        }

        public function borrarCategoria($params = null){
            $id = $params[':ID'];
            if($this->helper->checkAdmin()){
                if($this->modelcat->sePuedeModificar($id)){
                    $this->modelcat->borrarCategoria($id);
                    header("Location: " . CATEGORIAS);
                }else{
                    $user = $this->helper->getLoggedUserName();
                    $this->view->showError("No se puede eliminar la categoria ya que existen films con la misma categoria",$user);
                }
            }else{
                header("Location: " . BASE_URL);
            }
        }

        public function insertarCategoria(){
            if($this->helper->checkAdmin()){
                $this->modelcat->insertarCategoria($_POST['genero']);
                header("Location: " . CATEGORIAS);
            }else{
                $user = $this->helper->getLoggedUserName();
                $this->view->showError("No se puede insertar la categoria",$user);
            }
        }

        public function modificarCategoria($params = null){
            $id = $params[':ID'];
            if($this->helper->checkAdmin()){
                if($this->modelcat->sePuedeModificar($id)){
                    $this->modelcat->modificarCategoria($id, $_POST['genero']);
                    header("Location: " . CATEGORIAS);
                }else{
                    $user = $this->helper->getLoggedUserName();
                    $this->view->showError("No se puede modificar la categoria ya que existen films con la misma categoria",$user);
                }
            }else{
                header("Location: " . BASE_URL);
            }
        }

        public function getCategorias(){
            if($this->helper->checkAdmin()){
                $categorias = $this->modelcat->getCategorias();
                $user = $this->helper->getLoggedUserName();
                $this->view->DisplayCategorias($categorias, $user);
            }else{
                header("Location: " . BASE_URL);
            }
        }
      

}