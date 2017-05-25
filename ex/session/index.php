<?php
session_start();
$_SESSION['date'] = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li><a href="index.php">Присвоить значение даты</a></li>
            <li><a href="second.php">Используем присвоенное значение</a></li>
            <li><a href="third.php">Еще раз его используем</a></li>
            <li><a href="unset.php">Удаляем данные сессии</a></li>
        </ul>
    </body>
</html>