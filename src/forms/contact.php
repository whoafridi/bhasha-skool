<?php

if (!isset($_POST) or !isset($_POST["name"]) or !isset($_POST["email"]) or !isset($_POST["phone"]) or !isset($POST["branch"])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    return;
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["branch"];
$to = "rafiuzzamanafridi@gmail.com";
$message = "
<h4><strong>Name:</strong> $name</h4>
<h4><strong>Phone:</strong> $phone</h4>
<p><strong>Branch:</strong> $branch</p>
";
$message = wordwrap($message, 70, "\r\n");

$headers = "From: <$email>\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

if (mail($to, $subject, $message, $headers))
    header('Location: ' . $_SERVER['HTTP_REFERER']);
else
    header('Location: /');