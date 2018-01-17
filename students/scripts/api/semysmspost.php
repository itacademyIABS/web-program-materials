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


foreach ($sms0 as $sms) {
    $msg = "ПРивет я тест";
    $response = send($sms['phone'], $msg);
    var_dump($response);
}

