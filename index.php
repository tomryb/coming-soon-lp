<?php

if (isset($_POST['submit'])) {

    $from = $_POST['email'];
    $to = '1rybakk.tomasz@gmail.com';
    $subject = 'Email signup';
    $body = 'Please sign me up to the mailing list';
    $errorEmail = 'Please enter a valid email address';
    $allGood = 'Thank you we\'ll keep you updated';
    $tryAgain = 'Sorry there has been an error, please try again';

    if (!$_POST['email']) {
        echo $emailError;
    }

    if (!$emailError) {
        if (mail($to, $subject, $from)) {
            echo $allGood;
        } else {
            echo $tryAgain;
        }
    }
}
