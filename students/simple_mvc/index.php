<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$classes = scandir("classes");

foreach ($classes as $class) {
    $path = "classes" . DIRECTORY_SEPARATOR . $class;
    if (is_file($path)) {
        require "$path";
    }
}
$c = $_GET['c'];
$a = $_GET['a'];


$cName = ucfirst($c) . "Controller";

$controller = new $cName;
$controller->$a();