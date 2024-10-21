<?php

define("MAIL_FROM_ADDRESS", "info@saransolutions.ch");
define("MAIL_TO_ADDRESS","saran.guru.94@gmail.com" );

function send_mail($subject, $body, $to)
{
    $headers = 'From: '.MAIL_FROM_ADDRESS. "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $body, $headers);
}
echo "before sending mail";
send_mail("test-subject", "test-body", MAIL_FROM_ADDRESS);
echo "<br>check your inbox";
