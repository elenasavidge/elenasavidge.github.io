<?php
$thankYouMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "esavidge@mines.edu"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    $thankYouMessage = "Thank you for your message!";
}
?>
