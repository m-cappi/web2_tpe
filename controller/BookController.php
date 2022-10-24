<?php
require_once("Controller.php");
require_once("../model/BookModel.php");
require_once("../model/AuthorModel.php");
require_once("../view/BookView.php");

Class BookController extends Controller{
    private $model;
    private $view;
    private $authorModel;

    public function __construct()
    {
        $this->model = new BookModel();
        $this->view = new BookView();
        $this->authorModel = new AuthorModel();
    }

    public function listAll($error=''){
        // Listado de item
        $booksWithAuthor = $this->model->getAllJoint();
        $authors = $this->authorModel->getAll();
        $this->view->showList($booksWithAuthor, $authors, $error);
    }

    public function detailsById($arr, $error=''){
        // Detalle de item
        $book = $this->model->getById($arr['id']);
        $authors = $this->authorModel->getAll();
        $this->view->showDetails($book, $authors, $error);
    }

    public function listByAuthorId($arr){
        // Listado de item x categoria
        // Detalle de categoria?
        $booksWithAuthor = $this->model->getAllByAuthorId($arr['authorId']);
        $authors = $this->authorModel->getAll();
        $this->view->showList($booksWithAuthor, $authors);
    }

    // CRUD
    public function addOne(){
        $this->authCheck();
        $error=null;
        if (!empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['FK_author_id'])){
            $this->model->addOne($_POST['title'], $_POST['genre'], $_POST['FK_author_id']);
        }
        else{
            $error="Faltan datos!";
            // Debug($_POST);
        }
        $this->listAll($error);
    }

    public function updateOne(){
        $this->authCheck();
        if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['FK_author_id'])){
            $this->model->updateById($_POST['id'], $_POST['title'], $_POST['genre'], $_POST['FK_author_id']);
            $this->listAll();
        }
        else{
            $error = "Faltan datos!";
            $mockedParams = ["id"=>$_POST['id']];
            $this->detailsById($mockedParams, $error);
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