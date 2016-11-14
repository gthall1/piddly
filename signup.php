<?php

$email = $_POST['email'];
$formcontent="New user: $email";
$recipient = "matt@notohomebuilders.com";
$subject = "A new user signed up for Piddly";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks.html");

?>
