<?php

abstract Class Controller{
    public function __construct(){}

    public function redirectHome(){
        header("Location: ".BASE_URL."home");
        die();
    }

    public function redirectLogin(){
        header("Location: ".BASE_URL."login");
        die();
    }

    public function forceLogout(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        session_destroy();
        $this->redirectLogin();
    }

    public function authCheck(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if (empty($_SESSION['isAuthenticated'])) {
            $this->forceLogout();
        }
    }

    public function adminCheck(){
        $this->authCheck();
        if(empty($_SESSION["isAdmin"])){
            $this->redirectHome();
        }
    }
}

?>