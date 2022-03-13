<?php

if (isset($_POST['submit']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $recipient = "alenka.rondon@gmail.com";

    mail($recipient, $subject, $message, $email) or die("Error!");

    echo "Thank You!";
}
?>