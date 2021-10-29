<?php

 include 'db_connection.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;
  //Getting Data from the form
  //jobCode is the primary key
  $id = $_GET['id'];
  $email = $_GET['email'];
  $date = new DateTime('+2 day');
  $date = $date->format('Y-m-d');
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " UPDATE bookings SET bookingApprovalDate = '$date' WHERE booking_id = '$id' "
   ))
   {
     echo("Error description: ". $mysqli->error);
   }




 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';

 $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jamesleeroycode@gmail.com';                     //SMTP username
    $mail->Password   = 'Cricket/50797';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jamesleeroycode@gmail.com', 'Traffic Department Booking System Admin');
    $mail->addAddress($email, 'System User');     //Add a recipient
  //  $mail->addAddress('ellen@example.com');               //Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Booking Application Accpeted';
    $mail->Body    = 'PLEASE NOTE THIS AN IMPORTANT EMAIL <br> Your appoinment has been accpeted. Please note that you have to come to our office for your appoinment on the follow date :<b>'.$date.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {

}
 //CLose DB Connection
 CloseCon($conn);

  header("Location:../userside/adminDashboard.php");
  exit();
 ?>
