<?php
    $todo_files = scandir('runtime');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Todo</title>
    </head>
    <body>
        <h1>Todo</h1>
        <form action="create.php" method="post">
            <input name="todo" type="text">
            <input type="submit" value="create">
        </form>
        <ul>
            <?php if (empty($todo_files)) : ?>
            <p>Список пуст</p>
            <?php else : ?>
                <?php foreach ($todo_files as $file) : ?>
                <?php if (is_file("runtime/".$file)) :?>
                <li>
                    <?php echo file_get_contents("runtime/".$file); ?>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <input type="submit" value="delete">
                    </form>
                    <form action="edit.php" method="post">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <input type="submit" value="edit">
                    </form>                    
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </body>
</html>