<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$counter_file = 'var/counter.txt';
/** Вариант с fopen*/
$handle = fopen($counter_file, 'c+');
$filesize = filesize($counter_file);
if ($filesize == 0) {
    $counter = 0;
} else {
    $counter = (int) fread($handle, $filesize);
}

$counter++;
rewind($handle);
fwrite($handle, $counter);
fclose($handle);


/*
Простой вариант
if (!is_file($counter_file)) {
    $counter = 0;
} else {
    $counter = (int) file_get_contents($counter_file);
}

$counter++;

file_put_contents($counter_file, $counter);

*/

echo $counter;