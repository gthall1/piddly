<?php

$email = $_POST['email'];
$formcontent="New user: $email";
$recipient = "info@piddly.com";
$subject = "A new user signed up for Piddly";
$mailheader = "From: info@piddly.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks.html");

?>
