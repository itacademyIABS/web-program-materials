<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
$email = "vromanichev24@gmail.com";
$password = "Dawa2432127";
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 565, "ssl")
        ->setUsername($email)
        ->setPassword($password);

$mailer = Swift_Mailer::newInstance($transport);
// Create a message
$message = new Swift_Message('Wonderful Subject');
$message->setFrom([$email => 'John Doe'])
  ->setTo(['vromanichev@vetmanager.ru'])
  ->setBody('Here is the message itself');
 

// Send the message
$result = $mailer->send($message);

var_dump($result);

