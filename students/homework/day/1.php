<?php
/*
2) Напишите программу которая создает файл text.txt и записывает в него текст "test"

*/

$path = 'var' . DIRECTORY_SEPARATOR . 'text.txt';

file_put_contents($path, 'test');