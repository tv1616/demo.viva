<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];

    // Send an email to the mailing system
    $to = "your-mailing-<system@example.com";
    $subject = "New Subscriber: $name";
    $message = "Email: $email\nName: $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for subscribing, $name!";
    } else {
        echo "There was an error subscribing, please try again.";
    }
}
?>
6/