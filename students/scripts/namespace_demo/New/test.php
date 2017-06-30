<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
 * Убедитесь, что без пространств имен нельзя объявить класс с одинаковым именем
class Test {
}
class Test {
}
*/

require_once "App/Main/MyClass.php";
require_once "App/Secondary/MyClass.php";

$my1 = new \App\Main\MyClass();
$my1->hello();

$my2 = new \App\Secondary\MyClass();
$my2->hello();

//Использование ключевого слова use

// Псевдоним Sec
use App\Secondary as Sec;

$my3 = new Sec\MyClass();
$my3->hello();

//Необъявленный псевдоним
use App\Secondary;

$my4 = new Secondary\MyClass();
$my4->hello();

//Полный путь
use App\Main\MyClass;

$my5 = new MyClass();
$my5->hello();

