<?php

if (isset($_POST['submit']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $formcontent="From: $name \n Message: $message";
    $recipient = "alenka.rondon@gmail.com";
    $mailheader = "From: $email \r\n";

    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    
    echo "Thank You!";
}
?>