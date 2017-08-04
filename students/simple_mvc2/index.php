<?php

$classes = scandir("classes");

foreach ($classes as $class) {
    $path = "classes" . DIRECTORY_SEPARATOR . $class;
    if (is_file($path)) {
        require $path;
    }
}

$c = ucfirst($_GET["c"]) . "Controller";
$a = $_GET['a'];
$controller = new $c;
$controller->$a();