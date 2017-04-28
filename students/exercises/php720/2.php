<?php

/**
 * Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
 */


//Решение студента  --------------------------------------------------------

function count_pieces_in_number($number, $serch_number) {
    $count_number = strlen($number);
    $result = 0;
    for ($i = 0; $i < $count_number; $i++) {
        if (substr($number, $i, 1) == $serch_number) {
            $result++;
        }
    }
    return $result;
}

$a = count_pieces_in_number(442158755745, 8);
echo $a;


/* По аналогии с первым примером, можно перейти к foreach используя стандартные функции или даже прийти к однострочному решению
 * http://php.net/manual/ru/function.str-split.php
 * http://php.net/manual/ru/function.array-count-values.php
 * 
 * Подумайте как решить эту же задачу использу вместо array_count_values функцию http://php.net/manual/ru/function.array-search.php
 */
$number = 442158755745;
$search_number = 8;
echo (array_count_values(str_split($number)))[$search_number];

//На такую хрень даже нетбинс ругается) Но она работает.