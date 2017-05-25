<?php
require 'functions.php';
$error = "";
if (isset($_POST['login'])) {
    if (check_password($_POST['login'], $_POST['password'])) {
        setcookie("user", $_POST['login'], time() + 3600, "/");
    } else {
        $error = "Wrong password";
    }
}

if (isset($_POST['logout'])) {
    setcookie("user", null, -1, "/");
}


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <?php if(!empty($error)) :?>
            <div style="background-color: #FF3300; font-size: 24px; width: 600px; padding: 20px;"><?php echo $error; ?></div>
        <?php endif; ?>
            
        <form style="margin-top: 10px;" method="post">
            <input name="login" placeholder="Login" type="text">
            <input name="password" placeholder="Password" type="text">
            <input type="submit" value="enter">
            <input type="submit" value="logout">
        </form>
            
        <a href="private.php">Приватная часть</a>
    </body>
</html>