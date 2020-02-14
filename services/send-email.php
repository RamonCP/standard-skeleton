
<?php	
    require_once("../lib/phpmailer/class.phpmailer.php");
    $body = "";
    $subject = "";
    $mailDestino = "";
    $name = "";

	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';
	$mail->True;
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; 
	$mail->SMTPAuth = true; 
	$mail->Username = ""; 
	$mail->Password = ""; 
	$mail->From = ""; 
	$mail->FromName = "" ; 
	$mail->AddAddress($mailDestino, $name); 
	$mail->WordWrap = 50; 
	$mail->IsHTML = true ; 
	$mail->Subject = $subject ; 
	$mail->Body = '<br/>' . $body . '<br/>' ; 
	$mail->AltBody = "$mensagem" ; 

	if(!$mail->Send()) 
	{	
		echo "Error";
	}	
?>