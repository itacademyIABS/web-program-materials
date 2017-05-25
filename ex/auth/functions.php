<?php

function get_users() {
    $file = fopen('users.csv', 'r');
    $result = array();
    while (($line = fgetcsv($file)) !== FALSE) {
        $result[] = array(
            'login' => $line[0]
            , 'password' => $line[1]
        );
    }
    fclose($file);
    return $result;
}

function check_password($login, $password) {
    $users = get_users();
    foreach ($users as $user) {
        if ($user['login'] == $login && $user['password'] == $password) {
            return true;
        }
    }
    return false;
}
