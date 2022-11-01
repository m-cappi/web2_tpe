<?php
require_once("Controller.php");
require_once("../model/UserModel.php");
require_once("../view/UserView.php");

Class UserController extends Controller{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }
}

