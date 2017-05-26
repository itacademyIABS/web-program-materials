<?php

session_start();

$counter =  (!isset($_SESSION['counter'])) ? 0 : $_SESSION['counter'];
$counter++;
$_SESSION['counter'] = $counter;
echo "$counter просмотров";