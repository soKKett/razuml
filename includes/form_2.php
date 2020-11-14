<?php	
	if(empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$message = $_POST['message'];
	
	$to = 'jaeger.opfor@yandex.ru'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Новый отзыв с сайта Разум-Л";
	$email_body = "You have received a new message. \n\n".
				  "Message: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: noreply@razuml.ru\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>