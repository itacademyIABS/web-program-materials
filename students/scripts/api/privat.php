<?php

$currency_url = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
$content = file_get_contents($currency_url);

$d = json_decode($content, true);

foreach($d as $c) {
	if ($c['ccy'] == "USD") {
		$uC = $c["sale"];	
	}
}
var_dump($uC*100);












/*


$content = file_get_contents($currency_url);
var_dump($content);
$decoded = json_decode($content, true);
var_dump($decoded);*/
