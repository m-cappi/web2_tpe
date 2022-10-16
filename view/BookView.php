<?php
require_once("../libs/Smarty.class.php");
require_once("View.php");

Class BookView extends View{
    //private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('docTitle', DOC_TITLE);
        }

    public function showList($booksWithAuthorObj, $authors){
        $this->smarty->assign('books', $booksWithAuthorObj);
        $this->smarty->assign('authors', $authors);
        $this->showLayout("booksList.tpl");
    }
    
    public function showDetails($bookObj){
        $this->smarty->assign('book', $bookObj);
        $this->showLayout("bookDetails.tpl");
    }
}

?>