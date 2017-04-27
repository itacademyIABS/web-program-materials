<?php

//Дано:

$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2006"
);
/**
Для него:

Вывести все характеристики через “-”. В конце “-” быть не должно.
 */

$counter = 0;
$count = count($bmw);
foreach ($bmw as $value) {
    $counter++;
    if ($counter < $count) {
        echo "{$value} - ";
    } else {
        echo $value;
    }
}