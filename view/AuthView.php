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

    public function showLogin($errorMsg = ''){
        $this->smarty->assign('docTitle', DOC_TITLE.' - Iniciar sesion');
        $this->showLayout("login.tpl", $errorMsg);
    }
    
    public function showRegister($errorMsg = ''){
        $this->smarty->assign('docTitle', DOC_TITLE.' - Registrate');
        $this->showLayout("register.tpl", $errorMsg);
    }
}

?>