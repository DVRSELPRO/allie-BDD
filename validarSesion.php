<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
extract($_GET);
$action = (isset($action) ? $action : "");

if($action == "close"){
    include_once './controller/ControllerUser.php';
    $controllerUser = new ControllerUser();
    $controllerUser->closeSesion();
    $sesion = false;
}
