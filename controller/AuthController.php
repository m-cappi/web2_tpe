<?php
require_once("Controller.php");
require_once("../model/UserModel.php");
require_once("../view/AuthView.php");

Class AuthController extends Controller{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function getLogin(){
        $this->view->showLogin();
    }

    public function getRegister(){
        $this->view->showRegister();
    }

    public function login(){
        if (empty($_POST['email']) || empty($_POST['password'])){
            return $this->view->showLogin("Faltan credenciales!");
        }

        $user = $this->model->getUser($_POST['email']);

        if(!$user || !password_verify($_POST['password'], $user->password)){
            return $this->view->showLogin("Acceso denegado!");
        }

        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['alias'] = $user->alias;
        $_SESSION['email'] = $user->email;
        $_SESSION['isAuthenticated'] = true;
        $_SESSION['isAdmin'] = $user->is_admin;

        $this->redirectHome();
    }

    public function logout(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        session_destroy();
        $this->redirectHome();
    }

    public function register(){
        if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['alias'])){
            Debug($_POST);
            return $this->view->showRegister("Faltan datos!");
        }
        $this->model->addOne($_POST['email'],$_POST['password'],$_POST['alias'], !empty($_POST['isAdmin']));
        $this->login();
    }
}

?>