<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">Присвоить значение даты</a></li>
            <li><a href="second.php">Используем присвоенное значение</a></li>
            <li><a href="third.php">Еще раз его используем</a></li>
            <li><a href="unset.php">Удаляем данные сессии</a></li>
        </ul>
        <div class="date"><?php echo $_SESSION['date']; ?></div>
        
    </body>
</html>