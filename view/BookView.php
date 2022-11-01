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
    
    public function showList($booksWithAuthorObj, $authors, $errorMsg = ''){
        $this->smarty->assign('docTitle', DOC_TITLE.' - Libros');
        $this->smarty->assign('books', $booksWithAuthorObj);
        $this->smarty->assign('authors', $authors);
        $this->showLayout("booksList.tpl", $errorMsg);
    }
    
    public function showDetails($bookObj, $authors, $errorMsg = ''){
        $this->smarty->assign('docTitle', $bookObj->title);
        $this->smarty->assign('book', $bookObj);
        $this->smarty->assign('authors', $authors);
        $this->showLayout("bookDetails.tpl", $errorMsg);
    }
}

