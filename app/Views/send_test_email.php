<?php

use Config\Services;

// Load the email helper
helper('email');

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
