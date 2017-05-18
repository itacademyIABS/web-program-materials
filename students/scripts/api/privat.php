<?php

$currency_url = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';

$content = file_get_contents($currency_url);
var_dump($content);
$decoded = json_decode($content, true);
var_dump($decoded);
