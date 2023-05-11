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

        $s="Regarding blood donation";
        $msg ="This is an non emerency message.You have completed 3 months of donating blood,If it is possible you may come and donate blood";
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = $s;
        $mail->Body = $msg;
        $mail->send();
        $mail->ClearAddresses();
    }


    $mail->isSMTP();
$mail->SMTPDebug = 4; // Enable verbose debugging output

// Send the email

if (!$mail->send()) {
    echo "Error: " . $mail->ErrorInfo;
}
}// get the comma-separated string from the hidden input field
  //$email_array = explode(",",$email_list);


    // Loop through recipients list and send email to each recipient
   



echo "<script>  alert('sent');
document.location.href='donorEmail.php';

</script>";






}






?>