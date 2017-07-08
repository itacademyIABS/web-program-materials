<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$type = $_GET['type'];

class WrongLogin extends Exception {}
class WrongPassword extends Exception {}
class WrongAll extends Exception {}

try {
    // ....
    if ("login" == $type) {
        throw new WrongLogin("err");
    }
    if ("password" == $type) {
        throw new WrongPassword("err");
    }     
    if ("all" == $type) {
        throw new WrongAll("err");
    }    
} catch (WrongLogin $e) {
  echo "wrong login: " . $e->getMessage();  
}
catch (WrongPassword $e) {
  echo "wrong password: " . $e->getMessage();  
}
catch (Exception $ex) {
    echo $ex->getMessage();
}
catch (Throwable $ex) {
    echo $ex->getMessage();
}
