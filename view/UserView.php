<?php
require_once("../libs/Smarty.class.php");
require_once("View.php");

Class UserView extends View{
    // private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('docTitle', DOC_TITLE);
    }

    public function showList($usersObj, $errorMsg = ''){
        $this->smarty->assign('users', $usersObj);
        $this->showLayout("users.tpl", $errorMsg);
    }

    public function showDetail($userObj, $errorMsg = ''){

    }
}

?>