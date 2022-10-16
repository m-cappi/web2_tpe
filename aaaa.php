<?php
require_once("./router/route.php");
require_once("./router/router.php");
require_once("./controller/index.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}
$params = explode('/', $action);
// explode es similar al split


// Redirect browser
header("Location: home");
header("Location: ".BASE_URL."home");
?>