<?php

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}
else {
    $page = "home";
}
//inclue la définition de notre classe
require("controllers/MainController.php");
require("controllers/DataApiNasaController.php");

$controller = new MainController();

if($page == "home") {
    $controller->home();
}
if($page == "dailyPicture") {
    $controller->dailyPicture();
}