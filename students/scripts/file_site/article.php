<?php
require_once 'functions.php';
require_once 'visitors_log.php';
$articleFile = $_GET['name']; 
$article = get_article($articleFile);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $article['title']; ?></title>
    </head>
    <body>
        <article>
            <h1>
                <?php echo $article['title']; ?>
            </h1>
            <div>
                <?php echo $article['content']; ?>
            </div>
        </article>
    </body>
</html>