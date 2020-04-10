<?php
require 'controller/controller.php';
$controller = new Controller;
if(isset($_GET["delete"]))
{
        $controller->updateNTH($_GET['delete']);
        $controller->InsertWHT($_GET['delete']);
        header("Location: food.php");
}
    

    

