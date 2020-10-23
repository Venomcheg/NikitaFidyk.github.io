<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'niknamenik@mail.ru';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n"."User Email: $visito_email./n"."User Message: $message./n";
	$to = "niknamenik@mail.ru";
	$headers = "From: $email_form \r\n";
	
	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject, $email_body, $headers);

	header("Location: index.html");
