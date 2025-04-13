<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullName"];
    $from = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: $from";

    $to = "sayounparui45@gmail.com";

    $email_subject = "Contact Form: $subject";
    $email_body = "
        You have received a new message from your website contact form.\n\n
        Subject: $subject\n
        Message:\n$message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: main.php");
    } else {
        echo "Message could not be sent.";
    }
}
