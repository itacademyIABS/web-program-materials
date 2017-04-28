<?php
ini_set('display_error', 1);
error_reporting(E_ALL);
require_once 'functions.php';
define('LOG_FILE', 'log.txt');
$log_file_path = RESULTS_DIR . DIRECTORY_SEPARATOR . LOG_FILE;

if (empty($_GET['number_file'])) {
echo <<<'EOT'
    <a href="index.php?number_file=1">Искать файл 1</a><br>
    <a href="index.php?number_file=2">Искать файл 2</a><br>    
EOT;
} else {
    $file_number = $_GET['number_file'];
    
    $file_for_search = get_file_by_number($file_number);
    $another_file = get_another_file($file_for_search);
    $all_dirs = get_project_dirs();
    $dirs_without_file = get_dirs_without_file($all_dirs, $file_for_search);
    echo '<ul>';
    foreach ($dirs_without_file as $dir) {
        echo "<li>{$dir}</li>"; 
    }
    echo '</ul>';
    $write_data = array();
    if (!file_exists($log_file_path)) {
        $write_data[] = array('IP', 'datetime', 'file');
    }
    $write_data[] = array(
        $_SERVER['REMOTE_ADDR']
        , date('Y-m-d H:i')
        , $file_for_search
    );
    $handler = fopen($log_file_path, 'a');
    foreach ($write_data as $data) {    
        fputcsv($handler, $data);
    }
    fclose($handler);
    
}
