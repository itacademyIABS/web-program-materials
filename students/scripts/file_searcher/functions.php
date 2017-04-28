<?php

define('PROJECTS_DIR', 'projects');
define('RESULTS_DIR', 'results');
define('FILE1', "config.php");
define('FILE2', "config.local.php");

function get_file_by_number($number) {
    if ($number == 1) {
        return FILE1;
    } else if ($number == 2) {
        return FILE2;
    } else {
        die("Неверные данные\n");
    }
}

function get_another_file($current_file) {
    if ($current_file == FILE1) {
        return FILE2;
    } else {
        return FILE1;
    }
}

function get_project_dirs() {
    $dirs = scandir(PROJECTS_DIR);
    $result = array();
    foreach ($dirs as $dir) {
        if ($dir != '.' and $dir != '..') {
            $result[] = PROJECTS_DIR . DIRECTORY_SEPARATOR . $dir;
        }
    }
    return $result;
}

function get_dirs_without_file($dirs, $filename) {
    $result = array();
    foreach ($dirs as $dir) {
        if (!file_exists($dir . DIRECTORY_SEPARATOR . $filename)) {
            $result[] = $dir;
        }
    }
    return $result;
}
