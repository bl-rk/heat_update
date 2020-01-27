<?php
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Load Composer's autoloader


 //********************************************
// define a constant consisting of the username and password 
define('UNAME', 'heatfinancials@gmail.com');
define('UPWD', 'updatedheat');


if(isset($_POST["submit"]))      
      {
$email=$_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$name= $_POST["name"];
$reciever="heatfinancials@gmail.com";

 $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable dosuleo0@gmail.comSMTP
    $mail->SMTPDebug = 4;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
                                                 
    $mail->Username = UNAME;  // call defined constant
    $mail->Password = UPWD;    //call password 

                                                                                                                  // $mail->SetFrom($email, $name);  previously working implmented one 
                                                                                                                  // $mail->Subject = $subject;
                                                                                                                  // $mail->Body = $message;
                                                                                                                  // $mail->AddAddress($reciever);

    $mail->setFrom($email, $name);
    $mail->addAddress($reciever, 'Heat info');     // to chance to info@heatfinancial
    // $mail->addAddress('info@heatfinancials.com');               // Name is optional
    $mail->addReplyTo($email, $name);
    // $mail->addCC('cc@example.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;


  if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    }    
      else if ($mail-> Send())
    {
        header("location:contact.php");
        exit();
    }

}


    //     $error = 'Message sent!'){
    //     return true;

    // } 
    //     else if(

?>