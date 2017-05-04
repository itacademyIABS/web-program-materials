<?php

/* 
4) Напишите программу, которая объединит содержимое 2х файлов и запишет его в третий.
 */

$content = file_get_contents('var/text.txt');
$content2 = file_get_contents('var/text2.txt');
$content3 = $content . $content2;
file_put_contents('var/text3.txt', $content3);