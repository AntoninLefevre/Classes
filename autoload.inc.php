<?php


spl_autoload_register(function($class){
    $fichier = "classes/" . $class .'.class.php';
    if (file_exists($fichier))
       require_once($fichier);
});


MyPDO::setConfiguration('mysql:host=localhost;dbname=classes;charset=utf8', 'root', '');

