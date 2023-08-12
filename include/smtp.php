<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "globalstandardtrb.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "support@globalstandardtrb.com"; // Change Email Address
        $mail->Password = 'globalstandardtrb.com'; // Change Email Password
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('support@globalstandardtrb.com','Global Standard Trust Bank'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("support@globalstandardtrb.com", "Global Standard Trust Bank"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>