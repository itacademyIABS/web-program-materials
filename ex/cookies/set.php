<?php

setcookie("mykey", "myvalue", time() + 3600, "/"); // 3600 - секунд это 1 час
setcookie("mysecondkey", "mysecondvalue", time() + 3600, "/");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <div id="cookie"></div>
        <a href="/">Тестируем куки на другой странице</a>     
        <script>
            console.log(document.cookie);            
            document.getElementById("cookie").innerHTML = document.cookie;
        </script>        
    </body>
</html>