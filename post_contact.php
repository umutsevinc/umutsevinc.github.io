<?php

$dest = "contact@scalenepartners.com";
$object = "New message from scalenepartners.com";
$errors = [];

if (!isset($_POST["name"]) || $_POST["name"] == "") {
    $errors["name"] = "Please enter your name.";
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Please enter a valid email adress.";
}
if (!isset($_POST["email"]) || $_POST["email"] == "") {
    $errors["email"] = "Please enter an email adress.";
}

if (!isset($_POST["message"]) || $_POST["message"] == "") {
    $errors["message"] = "Please enter a message.";
}

$name = htmlentities($_POST['name']);
$email = htmlentities($_POST["email"]);
$message = htmlentities($_POST["message"]);

$headers  = "From: $email\r\n"; 
$headers .= 'Reply-To:' . $email . "\r\n";
$headers .= "Content-type: text/html\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";

$body = "
<html>
    <head>
        <title>New message :</title>
    </head>
    <body>
        <img src='http://www.scalenepartners.com/images/logo1.svg' width='50%'/>
        <p>Here's your message from your website</p>
        <p><b>Name:</b> $name</p>
        <p><b>Email address:</b> $email</p>
        <p><b>Message:</b> $message</p>
    </body>
</html>
    
";


session_start();
if (!empty($errors)) {
    $_SESSION["errors"] = $errors;
    $_SESSION["input"] = $_POST;
    header('Location: index.php#contact');
} else {
    $_SESSION["success"] = true;
    mail($dest, $object, $body, $headers);
    header('Location: index.php#contact');
}