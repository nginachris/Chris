<?php
require 'ClassAutoLoad.php';

// Get values from form
$userName = $_POST['name'] ?? '';
$userEmail = $_POST['email'] ?? '';

// Prepare mail content
$mailCnt = [
    'name_from' => 'BBIT Systems Admin',
    'mail_from' => 'christine.ngumbau@strathmore.ed',
    'name_to'   => $userName,
    'mail_to'   => $userEmail,
    'subject'   => 'Welcome to BBIT Enterprise',
    'body'      => "Welcome <b>$userName</b>,<br>We’re glad to have you on board!"
];

// Call SendMail class
$ObjSendMail->Send_Mail($conf, $mailCnt);