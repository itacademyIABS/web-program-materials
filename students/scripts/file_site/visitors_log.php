<?php

require_once 'functions.php';
define('VISITORS_LOG_FILE', 'visitors.txt');

$data = array(
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['REQUEST_URI'],
    date('Y-m-d H:i')
);

write_line_to_csv(VAR_PATH . DIRECTORY_SEPARATOR . VISITORS_LOG_FILE, $data);
