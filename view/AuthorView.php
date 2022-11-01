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

    public function showList($authorsObj, $errorMsg = ''){
        $this->smarty->assign('authors', $authorsObj);
        $this->smarty->assign('docTitle', DOC_TITLE." - Autores");
        $this->showLayout("authorsList.tpl", $errorMsg);
    }
    
    public function showDetails($authorObj, $errorMsg = ''){
        $this->smarty->assign('author', $authorObj);
        $this->smarty->assign('docTitle', $authorObj->name.' '.$authorObj->last_name);
        $this->showLayout("authorDetails.tpl", $errorMsg);
    }
}

