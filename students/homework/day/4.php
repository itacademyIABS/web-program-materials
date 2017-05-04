<?php

$content = file_get_contents('http://vk.com');

$t = "Vladimir";
$s = strpos('<h1>'); 
$e = strpos('</h1>'); 
var_dump(substr($t, $s, $e));