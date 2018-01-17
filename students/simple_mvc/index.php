<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'functions.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'main';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

$cName = "\\IABS\\MVC\\Controller\\". ucfirst($c);

$controller = new $cName;
$controller->$a();