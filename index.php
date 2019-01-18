<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'steandel@gmail.com';
$mail->Password = 'Cntgf140197';
$mail->SetFrom('steandel@gmail.com');
$mail->Subject = 'Mail From Portfolio';
$mail->Body = 'A test email';
$mail->AddAddress('stepan.arsentjev@gmail.com');

?>