<?php

$users = array(
    array('login' => 'administrator', 'role' => 'admin') 
    , array('login' => 'vasya', 'role' => 'user') 
    , array('login' => 'petya', 'role' => 'user') 
    , array('login' => 'vova', 'role' => 'user') 
    , array('login' => 'klava', 'role' => 'user') 
);

/**
 * 
    Вывести логин первого пользователя
    Вывести пароль третьего пользователя
    Поменять логин у первого пользователя на admin
    Поменять role у третьего пользователя 
    Поменять login последнего пользователя на last
    Вывести с новой строки login каждого пользователя
    Вывести логин всех пользователей с ролью user
    Вывести роль у пользователя vova
    У пользователя с именем vova изменить роль на admin, вывести список всех админов
    Подсчитать количество админов в массиве
    Вывести двух последних пользователей
    Написать аналог стандартной функции array_column
 */


function array_column2($arr, $column_name) {
    $result = array();
    foreach ($arr as $v) {
        $result[] = $v[$column_name];
        //echo $v[$column_name] . "\n";
    }
    return $result;
}

$r = array_column2($users, 'login');

var_dump($r);