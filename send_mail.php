<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $to = "boharasaugat23@gmail.com";
    $subject = "New comment from $name";
    $body = "Name: $name\nEmail: $email\n\ncomment:\n$comment";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "comment sent successfully!";
    } else {
        echo "comment sending failed.";
    }
}
?>
