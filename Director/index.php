<?php

 
Use PHPMailer\PHPMailer\PHPmailer;
Use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';
//require 
if(isset($_POST["BtnSubmit"])){
   
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail ->SMTPAuth = true;
$mail->Username = 'wmadushi49@gmail.com';
$mail->Password = 'zswherapcjuvbtgr';
$mail->SMTPSecure ='ssl';
$mail->Port = 465;


$mail->setFrom('wmadushi49@gmail.com');

$mail->addAddress($_POST["email"]);
$mail->isHTML(true);

$mail->Subject=$_POST["subject"];
$mail->Body = $_POST["message"];

$mail->send();

echo '<script type="text/javascript">';
echo 'alert("Email sent");';

 echo 'window.location.href="AddMLTI.php";';
echo '</script>';






}






?>