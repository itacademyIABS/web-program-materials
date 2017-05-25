<?php 

if (!isset($_COOKIE['user'])) {
    die('Access denied');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Сайт</title>
    </head>
    <body>
        <div style="margin: auto; width: 400px; font-size: 24px; background-color: yellow; text-align: center;">
            Закрытый контент для пользователя <?php echo $_COOKIE['user']; ?>
        </div>
    </body>
</html>