<?php 
require_once 'functions.php'; 
require_once 'visitors_log.php';
$articles = get_articles();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Новости</title>
    </head>
    <body>
        <h1>Новости</h1>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li><a href="article.php?name=<?php echo $article['file']; ?>"><?php echo $article['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>