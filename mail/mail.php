<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

";

//mail($replyemail,"","","FROM: ".$nameContacto." <".$emailContacto.">\n");


mail ("pinetvpc@gmail.com" , ".$subject.", ".$message.", "FROM: ".$name." <".$email.">\n");
header("location: ../mail-success.html ");
?>


