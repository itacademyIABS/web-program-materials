<?php
ini_set('display_error', 1);
error_reporting(E_ALL);
require_once 'functions.php';

echo "\n1 если хотите искать config.php\n";
echo "2 если хотите искать config.local.php\n";

$number_file = readline("Введите номер:");

$file_for_search = get_file_by_number($number_file);
$another_file = get_another_file($file_for_search);
$all_dirs = get_project_dirs();
$dirs_without_file = get_dirs_without_file($all_dirs, $file_for_search);

$result_filename = date('H_i_d.m.Y') . '.csv';
$handler = fopen(RESULTS_DIR . DIRECTORY_SEPARATOR . $result_filename, 'w');
$columns = array('path', 'second files exits');
fputcsv($handler, $columns);
foreach ($dirs_without_file as $dir) {    
    $row = array($dir);
    if (file_exists($dir . DIRECTORY_SEPARATOR . $another_file)) {
        $row[] = 'ДА';
    } else {
        $row[] = 'НЕТ';
    }
    fputcsv($handler, $row);
}
fclose($handler);
