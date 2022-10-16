<?php
require_once("../libs/Smarty.class.php");
require_once("View.php");

Class AuthView extends View{
    //private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('docTitle', DOC_TITLE);
    }

    public function showLogin($errorMsg = null){
        $this->smarty->assign('docTitle', 'Iniciar sesion');
        $this->smarty->assign('errorMsg', $errorMsg);
        $this->showLayout("login.tpl");
    }
    
    public function showRegister($errorMsg = null){
        $this->smarty->assign('docTitle', 'Registrate');
        $this->smarty->assign('errorMsg', $errorMsg);
        $this->showLayout("register.tpl");
    }
}

?>