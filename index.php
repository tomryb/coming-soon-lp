<?php

//na razie bezużyteczne

if (isset($_POST['submit'])) {

    $from = $_POST['email'];
    $to = '1rybakk.tomasz@gmail.com';
    $subject = 'Email signup';
    $body = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp;Please sign me up to the mailing list</div>';
    $errorEmail = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp; Please enter a valid email address</div>';
    $allGood = '<div class="text-success"><i class="fas fa-check"></i> &nbsp;Thank you we\'ll keep you updated</div>';
    $tryAgain = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp; Sorry there has been an error, please try again</div>';

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
