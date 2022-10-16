<?php
require_once("Controller.php");
// require_once("../model/HomeModel.php");
require_once("../view/HomeView.php");

Class HomeController extends Controller{
    // private $model;
    private $view;

    public function __construct()
    {
        // $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function getHome(){
        $this->view->showHome();
    }
}

?>