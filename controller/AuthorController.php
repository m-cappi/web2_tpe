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

    public function listAll(){
        // Listado de categoria
        $authors = $this->model->getAll();
        $this->view->showList($authors);
    }

    public function detailsById($arr){
        // Detalle de item
        $data = $this->model->getById($arr['id']);
        $this->view->showDetails($data);
    }

    //CRUD
    public function addOne(){
        $this->authCheck();
        if (!empty($_POST['name']) && !empty($_POST['last_name'])){
            $this->model->addOne($_POST['name'], $_POST['last_name']);
        }
        else{
            // error?
            //Debug($_POST);
        }
        $this->listAll();
    }

    public function updateOne(){
        $this->authCheck();
        if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['lastName'])){
            $this->model->updateById($_POST['id'], $_POST['name'], $_POST['lastName']);
        }
        else{
            // error?
        }
        $this->listAll();
    }
    
    public function deleteOne(){
        $this->authCheck();
        if (!empty($_POST['id'])){
            $this->model->deleteById($_POST['id']);
        }
        else{
            // error?
        }
        $this->listAll();
    }
}

?>