<?php
require_once("Controller.php");
require_once("../model/AuthorModel.php");
require_once("../view/AuthorView.php");

Class AuthorController extends Controller{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new AuthorModel();
        $this->view = new AuthorView();
    }

    public function listAll($error=''){
        // Listado de categoria
        $authors = $this->model->getAll();
        $this->view->showList($authors, $error);
    }

    public function detailsById($arr, $error=''){
        // Detalle de item
        $data = $this->model->getById($arr['authorId']);
        $this->view->showDetails($data, $error);
    }

    //CRUD
    public function addOne(){
        $this->authCheck();
        $error=null;
        if (!empty($_POST['name']) && !empty($_POST['last_name'])){
            $this->model->addOne($_POST['name'], $_POST['last_name']);
        }
        else{
            $error="Faltan datos!";
            // Debug($_POST);
        }
        $this->listAll($error);
    }

    public function updateOne(){
        $this->authCheck();
        if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['last_name'])){
            $this->model->updateById($_POST['id'], $_POST['name'], $_POST['last_name']);
            $this->listAll();
        }
        else{
            $error= "Faltan datos!";
            $mockedParams = ["authorId"=>$_POST['id']];
            $this->detailsById($mockedParams, $error);
            // Debug($_POST);
        }
    }

    public function deleteOne(){
        $this->authCheck();
        $error=null;
        if (!empty($_POST['id'])){
            $this->model->deleteById($_POST['id']);
        }
        else{
            $error="Falta el id!";
            // Debug($_POST);
        }
        $this->listAll($error);
    }
}

?>