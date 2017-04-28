<?php
ini_set('display_error', 1);
error_reporting(E_ALL);
require_once 'functions.php';
if (empty($_GET['number_file'])) {
echo <<<'EOT'
    <a href="index.php?number_file=1">Искать файл 1</a><br>
    <a href="index.php?number_file=2">Искать файл 2</a><br>    
EOT;
} else {
    $file_number = $_GET['number_file'];
    
    $file_for_search = get_file_by_number($number_file);
    $another_file = get_another_file($file_for_search);
    $all_dirs = get_project_dirs();
    $dirs_without_file = get_dirs_without_file($all_dirs, $file_for_search);
    echo '<ul>';
    foreach ($dirs_without_file as $dir) {
        //TODO: Доделать
echo <<<'EOT'
    <a href="index.php?number_file=1">Искать файл 1</a><br>
    <a href="index.php?number_file=2">Искать файл 2</a><br>    
EOT;
    }
    echo '</ul>';
    
}
