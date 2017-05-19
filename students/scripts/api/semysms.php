<?php

require './students.php';

foreach ($students as $student) {
    $msg = urlencode("{$student['name']}, занятие по программированию состоится в вс на 11.30");
    $url = "https://semysms.net/api/3/sms.php?token={$token}&device={$device}&phone={$student['phone']}&msg={$msg}";
    $response = file_get_contents($url);
}
