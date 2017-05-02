<?php 
require 'functions.php'; 
$category = $_GET['name'];
$articles = get_articles($category);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $category ?></title>
    </head>
    <body>
        <h1><?php echo $category ?></h1>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li><a href="article.php?name=<?php echo $article['file']; ?>&category=<?php echo $category; ?>"><?php echo $article['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>