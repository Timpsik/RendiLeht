<?php
class Mail_model extends CI_Model {
	
	
	public function registration_mail($meil) {
	$this->load->library("Phpmailer_library");

   
	$email = $this->phpmailer_library->load();
	
	$email->setFrom('rendileht@gmail.com', 'Rendileht');
	$email->addAddress($meil);
	$email->Subject = "Tere";
	$email->isHTML(true);
	$email->Body = 'Tänud, et registreerisid.';
	$email->IsSMTP(); // telling the class to use SMTP
	$email->Host = "smtp.gmail.com";
	$email->SMTPDebug = 0;
	$email->SMTPSecure = 'tls';
	$email->SMTPAuth = true;
	$email->Port = 587;
	$email->Username = "rendileht@gmail.com";
	$email->Password = "123456789VR";

	if(!$email->Send())
	{
	   echo "Message could not be sent. 
	";
	   echo "Mailer Error: " . $email->ErrorInfo;
	   exit;
	}

	echo "Message has been sent";
	}
}
	?>