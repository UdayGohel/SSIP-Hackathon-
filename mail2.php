<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    $em=$_POST['email'];
    $otp=rand(100000,999999);
    $conn=mysqli_connect("localhost","root","","new otp");
    $sql="INSERT INTO `ver` (`In`,`email`, `otp`, `conotp`) VALUES ('',$em, $otp, '')";
    $result=mysqli_query($conn,$sql);    

    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'goheluday6445@gmail.com';                    
    $mail->Password   = 'xkmnyxfashksauin';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('goheluday6445@gmail.com', 'Gujrat Police');

    $mail->addAddress($em);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'Information of your Account';
    $mail->Body    = 'Your otp is'.$otp;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location:confirm.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


    