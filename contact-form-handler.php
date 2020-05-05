<?php
$name = $_POST['name'];
$visitor_email =$_POST['email'];
$message =$_POST['message'];


$email_from ='jkadmin@gmail.com';

$email_subject ="New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User message: $message.\n";


$to = "ksasi9527@mail.com";

$headers = "Form: $email_from \r\n";

$headers .="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: 1.html");

?>      