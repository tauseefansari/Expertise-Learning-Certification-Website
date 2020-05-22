<?php
require('academy_admin/../phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;
// $mail->Port     = 25;    
$mail->Username = "alwasat.cv@gmail.com";
$mail->Password = "international@123";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["reservation_email"], $_POST["reservation_name"]);
$mail->AddReplyTo($_POST["reservation_email"], $_POST["reservation_name"]);
$mail->AddAddress("ajay.entice@gmail.com");	
$mail->Subject ="Notification : New student applied " $_POST["reservation_name"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["content"]);

// if(is_array($_FILES)) {
// $mail->AddAttachment($_FILES['attachmentFile']['tmp_name'],$_FILES['attachmentFile']['name']); 
// }

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
?>