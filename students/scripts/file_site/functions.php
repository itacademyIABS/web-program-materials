<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('SITE_PATH', 'site');
define('VAR_PATH', 'var');
define('ARTICLE_DELIMITER', '%%%X%%%');
        
function get_categories() {
    $dirs = scandir(SITE_PATH);
    $result = array();
    foreach ($dirs as $dir) {
        if ($dir != '.' and $dir != '..') {
            $result[] = $dir;
        }        
    }
    return $result;
}        
//TODO: вынести в отдельную функцию
function get_articles_file($category) {
    $path = SITE_PATH . DIRECTORY_SEPARATOR . $category;
    $articles = scandir($path);
    $result = array();
    foreach ($articles as $article) {
        if ($article != '.' and $article != '..') {
            $result[] = $article;
        }        
    }
    return $result;
}

function get_articles($category) {
    $articles = get_articles_file($category);
    $result = array();
    foreach ($articles as $articleFile) {
        $result[] = get_article($category, $articleFile);
    }
    return $result;
}

function get_article($category, $articleFile) {
    $path = SITE_PATH . DIRECTORY_SEPARATOR . $category . DIRECTORY_SEPARATOR . $articleFile;
    $content = file_get_contents($path);
    $exploded = explode(ARTICLE_DELIMITER, $content);
    return array(
        'title' => $exploded[0]
        , 'content' =>  $exploded[1]
        , 'file' => $articleFile
    );
}

function write_line_to_csv($filename, $lineArray){
    $handle = fopen($filename, 'a');
    fputcsv($handle, $lineArray);
    fclose($handle);
}