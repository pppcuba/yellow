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


mail ("luisbmartinez78@gmail.com" , ".$subject.", ".$message.", "FROM: ".$name." <".$email.">\n");
//header("location: mail-success.html ");
?>
<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Su correo ha sido recibido con éxito</h2>
						<p class="black-test">nos pondremos en contacto con usted en breve a través del correo electrónico</p>
						<a href="index.html" class="button"><i class="fa fa-arrow-left"></i>Regresar</a>
					</div>
				</div>
			</div>

