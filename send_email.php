<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];
    
    $to = "kaanerenmemisoglu@gmail.com";
    $subject = "Portfolio Contact Form: " . $topic;
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $name <$email>";
    
    if(mail($to, $subject, $email_content, $headers)) {
        header("Location: index.html?status=success");
    } else {
        header("Location: index.html?status=error");
    }
    exit();
}
?> 