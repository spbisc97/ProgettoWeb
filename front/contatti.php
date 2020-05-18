<?php
if (isset($_POST['submitform'])){
	require_once('class.phpmailer.php');
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "prova.ltw1@gmail.com";
	$mail->Password = "pippopluto";
	$mail->SetFrom("example@gmail.com");
	$mail->Subject = "Test";
	$mail->Body = "hello";
	$mail->AddAddress("prova.ltw@gmail.com");



	/*$name=$_post['nome'];
	$subject=$_post['oggetto'];
	$mailFrom=$_post['mail'];
	$messagge=$_post['messaggio'];

	$mailtTo="orlandogiovannino@gmail.com";
	$headers="Da:".$mailFrom;
	$txt="hai ricevuto un eamil da".$name.".\n\n".$message;
	mail($mailTo,$subject,$txt,$headers);
	echo "email mandata con successo";*/



	

}