<?php
// los paths relativos son respecto a router/index!
// echo getcwd(); xampp\htdocs\web2\web2_tpe\router
require_once('../controller/AuthController.php');
require_once('../controller/AuthorController.php'); 
// tecnicamente es relativa a donde esta este archivo index?
require_once('BookController.php');
require_once('HomeController.php');
require_once('UserController.php');


?>