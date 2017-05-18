<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$url = "https://hooks.slack.com/services/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";
$data = array(
	'channel' => '#курилка'
	, 'username' => 'testbot'
        , 'text' => 'test message'
);
$post_data = "payload=".json_encode($data);
$ch = curl_init($url);;                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      

$result = curl_exec($ch);
var_dump($result);

