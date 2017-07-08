<?php

// load all classes
define("CLASSES_DIR", "classes");
$classes = scandir("classes");

foreach ($classes as $class) {
    if (is_file($class)) {
        require_once CLASSES_DIR . DIRECTORY_SEPARATOR . $class;
    }
}

$module = $_GET['controller'];
$action = $_GET['action'];


$controller = new ucfirst($module . "Controller");
$controller->$action();


