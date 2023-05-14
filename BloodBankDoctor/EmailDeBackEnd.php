<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "conp.php";
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    ini_set('log_errors', 1);
    ini_set('error_log', 'smtp_error.log');

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'wmadushi49@gmail.com';
        $mail->Password = 'zswherapcjuvbtgr';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('wmadushi49@gmail.com');

        $emails = $_POST['emails'];
        if (is_array($emails)) {
            $email_list = implode(",", $emails);
            $email_array = explode(",", $email_list);
            $to = $email_array;

            foreach ($to as $email) {
                $s = "Regarding disease identification";
                $msg = "You have been identified to have diseases in the blood testing phase.";

                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = $s;
                $mail->Body = $msg;
                $mail->send();
                $mail->ClearAddresses();
            }
        }

        // Update the database flag to mark emails as sent
        $Email_sent = 1;
        $sql = "UPDATE blood_testing_result SET Email_sent = '$Email_sent'";
        // Execute the query to update the flag in the database

        if ($conn->query($sql) === TRUE) {
            echo '<script type="text/javascript">';
            echo 'alert("Email sent");';
            echo 'window.location.href="BloodREsultsI.php";';
            echo '</script>';
        }
    } catch (Exception $e) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

?>
