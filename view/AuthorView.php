<?php
require_once("../libs/Smarty.class.php");
require_once("View.php");

Class AuthorView extends View{
    //private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('docTitle', DOC_TITLE);
    }

    public function showList($authorsObj){
        $this->smarty->assign('authors', $authorsObj);
        $this->showLayout("authorsList.tpl");
    }

    public function showDetails($authorObj){
        
    }
}

?>