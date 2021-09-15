<?php


$to      = 'mohitfgiet11@gmail.com';
$subject = 'Mail check';
$message = 'hello';
$headers = 'From: mohit.s@saxonglobal.com' . "\r\n" .
    'Reply-To: mohit.s@saxonglobal.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 