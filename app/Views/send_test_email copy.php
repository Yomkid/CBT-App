<?php

use Config\Services;

// Load the email helper
helper('email');

$config['protocol']  = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_user'] = 'odewayemayomi@gmail.com';
$config['smtp_pass'] = '0d3w4y3M4y0m1';
$config['smtp_port'] = 465;
$config['charset']   = 'utf-8';
$config['mailtype']  = 'html';
$config['newline']   = "\r\n"; 

// Get an instance of the Email service
$email = Services::email();

// Set email parameters
$email->setTo('yomkidsblog@gmail.com');
$email->setFrom('odewayemayomi@gmail.com', 'OMPPEAK TECHNOLOGY');
$email->setSubject('Test Email');
$email->setMessage('This is a test email.');

// Send the email
if ($email->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed.';
    echo '<pre>' . print_r($email->printDebugger(['headers']), true) . '</pre>';
}
