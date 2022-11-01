<?php
require_once("./Route.php");
require_once("./Router.php");
require_once("../controller/index.php");
require_once("../utils/Debug.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"], 2).'/');
define("DOC_TITLE", "Biblioteca");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$r = new Router();

// home
$r->setDefaultRoute("HomeController", "getHome");
$r->addRoute("home", "GET", "HomeController", "getHome");

// auth
$r->addRoute("login", "GET", "AuthController", "getLogin");
$r->addRoute("login", "POST", "AuthController", "login");
$r->addRoute("register", "GET", "AuthController", "getRegister");
$r->addRoute("register", "POST", "AuthController", "register");
$r->addRoute("logout", "GET", "AuthController", "logout");

// books
$r->addRoute("books/list", "GET", "BookController", "listAll");
$r->addRoute("books/:authorId", "GET", "BookController", "listByAuthorId");
$r->addRoute("book/:id", "GET", "BookController", "detailsById");
$r->addRoute("book/add", "POST", "BookController", "addOne");
$r->addRoute("book/update", "POST", "BookController", "updateOne");
$r->addRoute("book/delete", "POST", "BookController", "deleteOne");

// authors
$r->addRoute("authors/list", "GET", "AuthorController", "listAll");
$r->addRoute("author/:authorId", "GET", "AuthorController", "detailsById");
$r->addRoute("author/add", "POST", "AuthorController", "addOne");
$r->addRoute("author/update", "POST", "AuthorController", "updateOne");
$r->addRoute("author/delete", "POST", "AuthorController", "deleteOne");

// run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);