<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('SITE_PATH', 'site');
define('VAR_PATH', 'var');
define('ARTICLE_DELIMITER', '%%%X%%%');
        
     
//TODO: вынести в отдельную функцию
function get_articles_file() {
    $path = SITE_PATH . DIRECTORY_SEPARATOR;
    $articles = scandir($path);
    $result = array();
    foreach ($articles as $article) {
        if ($article != '.' and $article != '..') {
            $result[] = $article;
        }        
    }
    return $result;
}

function get_articles() {
    $articles = get_articles_file();
    $result = array();
    foreach ($articles as $articleFile) {
        $result[] = get_article($articleFile);
    }
    return $result;
}

function get_article($articleFile) {
    $path = SITE_PATH . DIRECTORY_SEPARATOR . $articleFile;
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