<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "douda.matej12@seznam.cz";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '<script type="text/javascript">
       window.onload = function () { alert("Welcome"); } 
</script>';
?>