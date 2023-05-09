<?php

 
Use PHPMailer\PHPMailer\PHPmailer;
Use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';
//require 
if(isset($_POST["send"])){
   
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail ->SMTPAuth = true;
$mail->Username = 'wmadushi49@gmail.com';
$mail->Password = 'zswherapcjuvbtgr';
$mail->SMTPSecure ='ssl';
$mail->Port = 465;


$mail->setFrom('wmadushi49@gmail.com');
$emails = $_POST['emails']; 
if(is_array($emails)){
    $email_list = implode(",", $emails);
    $email_array = explode(",", $email_list);
    $to =  $email_array;
    foreach($to as $email) {

        $s="Regarding deseas identification";
        $msg ="You have been been identified to have deseases in the blood testing phase.";
        $mail->addAddress($email);
        $Email_sent=1;
    
        $mail->isHTML(true);
        $mail->Subject = $s;
        $mail->Body = $msg;
        $mail->send();
        $mail->ClearAddresses();
    }

}// get the comma-separated string from the hidden input field
  //$email_array = explode(",",$email_list);


    // Loop through recipients list and send email to each recipient
   




$Email_sent=1;
$sql="update blood_testing_result set Email_sent ='$Email_sent'";

if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  echo 'alert("E mail sent");';
         
		                     echo 'window.location.href="BloodREsultsI.php";';
		                  echo '</script>';

                   } 
					 


}







?>