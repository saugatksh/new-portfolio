<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $to = "boharasaugat23@gmail.com";
    $email_subject = "New Contact Form Submission: $subject";

    // Email body
    $email_body = "
    You have received a new message from your website contact form.

    Name: $name
    Email: $email

    Comment:
    $comment
    ";
    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "comment sent successfully!";
    } else {
        echo "comment sending failed.";
    }
}
?>
