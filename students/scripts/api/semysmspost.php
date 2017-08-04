<?php

require './students.php';

function send($phone, $msg) {
    global $token;
    global $device;
    $url = "https://semysms.net/api/3/sms.php";
    $data = array(
        "phone" => $phone,
        "msg" => $msg,
        "device" => $device,
        "token" => $token
    );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}


foreach ($sms1 as $sms) {
    $msg = "Ув родители! Просим вас контролировать выполнение домашних заданий. Есть систематическое их невыполнение. Наша цель - качественное обучение. IT Академия IABS.";
    $response = send($sms['phone'], $msg);
    var_dump($response);
}


foreach ($sms2 as $sms) {
    $msg = urlencode("Ув родители! Просьба посодействовать в выполнении домашнего задания по цифровой фотографии. IT Академия IABS.");
    $response = send($sms['phone'], $msg);
    var_dump($response);
}
