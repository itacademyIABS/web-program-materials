<?php

$counter = empty($_COOKIE['counter']) ? 0 : $_COOKIE['counter'];    
$counter++;

setcookie("counter", $counter, time() + 3600, "/");  

echo "Посетило {$counter}";

