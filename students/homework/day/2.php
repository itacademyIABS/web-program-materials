<?php

/* 
3) Напишите программу, которая будет дописывать в файл text.txt слово "test", можно воспользоваться file_get_contents чтобы получить содержимое и добавить к нему слово, а можно решить иначе.

 */



$path = 'var' . DIRECTORY_SEPARATOR . 'text.txt';

$content = file_get_contents($path);

file_put_contents($path, $content . "test\n");

