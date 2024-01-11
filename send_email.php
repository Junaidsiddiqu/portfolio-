<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the email parameters
    $to = "your_email@example.com"; // Replace this with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // If the email is sent successfully, redirect to a thank you page
        header("Location: thank_you.html"); // Create a thank_you.html file with your thank you message
        exit;
    } else {
        // If there was an error sending the email, display an error message
        echo "Oops! Something went wrong. Please try again later.";
    }
}
