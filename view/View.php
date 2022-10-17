<?php
require_once("../libs/Smarty.class.php");


abstract Class View{
    protected $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function userAssignment(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if (!empty($_SESSION['isAuthenticated'])) {
            $this->smarty->assign('user', [
                "email" => $_SESSION["email"],
                "alias" => $_SESSION["alias"],
                "isAuthenticated" => $_SESSION["isAuthenticated"],
                "isAdmin" => $_SESSION["isAdmin"]
            ]);
        }
    }

    public function showLayout($contentTemplate, $errorMsg = ''){
        //$contentTemplate == file name
        $this->userAssignment();
        $this->smarty->assign('errorMsg', $errorMsg);
        $this->smarty->assign('contentTemplate', $contentTemplate);
        $this->smarty->display("../template/layout.tpl");
    }
}

?>