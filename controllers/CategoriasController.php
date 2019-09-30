<?php
require_once "./models/model.categorias.php";
require_once "./views/views.categorias.php";

class CategoriasController{
    private $model;
    private $view;

	function __construct(){
        $this->model = new CategoriasModel();
        $this->view = new CategoriasView();
    }
    
    public function GetCategorias(){
        $categorias = $this->model->GetCategorias();
        $this->view->DisplayCategorias($categorias);
    }

}