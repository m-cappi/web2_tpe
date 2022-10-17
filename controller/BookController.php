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

    public function listAll(){
        // Listado de item
        $booksWithAuthor = $this->model->getAllJoint();
        $authors = $this->authorModel->getAll();
        $this->view->showList($booksWithAuthor, $authors);
    }

    public function detailsById($arr){
        // Detalle de item
        $book = $this->model->getById($arr['id']);
        $authors = $this->authorModel->getAll();
        $this->view->showDetails($book, $authors);
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
        if (!empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['FK_author_id'])){
            $this->model->addOne($_POST['title'], $_POST['genre'], $_POST['FK_author_id']);
        }
        else{
            // error?
            Debug($_POST);
        }
        $this->listAll();
    }

    public function updateOne(){
        $this->authCheck();
        if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['authorId'])){
            $this->model->updateById($_POST['id'], $_POST['title'], $_POST['genre'], $_POST['authorId']);
        }
        else{
            // error?
            Debug($_POST);
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
            Debug($_POST);
        }
        $this->listAll();
    }

}

?>