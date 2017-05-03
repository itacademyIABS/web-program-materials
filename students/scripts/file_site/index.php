<?php 
require_once 'functions.php'; 
require_once 'visitors_log.php';
$categories = get_categories();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Крутой сайт</title>
    </head>
    <body>
        <h1>Главная</h1>
        <ul>
            <?php foreach($categories as $category) : ?>
            <li><a href="category.php?name=<?php echo $category; ?>"><?php echo $category; ?></a></li>
            <?php endforeach; ?>    
        </ul>
    </body>
</html>