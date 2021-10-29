<?php
  session_start();
$id_location = " ";
$poa_location = " ";

       if(isset($_FILES["idcard"]) && $_FILES["idcard"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["idcard"]["name"];
            $filetype = $_FILES["idcard"]["type"];
            $filesize = $_FILES["idcard"]["size"];

            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("upload/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    move_uploaded_file($_FILES["idcard"]["tmp_name"], "upload/" . $filename);
                    $id_location = $filename;

                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else{
            echo "Error: " . $_FILES["idcard"]["error"];
        }


        if(isset($_FILES["poa"]) && $_FILES["poa"]["error"] == 0){
             $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
             $filename = $_FILES["poa"]["name"];
             $filetype = $_FILES["poa"]["type"];
             $filesize = $_FILES["poa"]["size"];

             // Verify file extension
             $ext = pathinfo($filename, PATHINFO_EXTENSION);
             if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

             // Verify file size - 5MB maximum
             $maxsize = 5 * 1024 * 1024;
             if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

             // Verify MYME type of the file
             if(in_array($filetype, $allowed)){
                 // Check whether file exists before uploading it
                 if(file_exists("upload/" . $filename)){
                     echo $filename . " is already exists.";
                 } else{
                     move_uploaded_file($_FILES["poa"]["tmp_name"], "upload/" . $filename);
                     $poa_location = $filename;

                 }
             } else{
                 echo "Error: There was a problem uploading your file. Please try again.";
             }
         } else{
             echo "Error: " . $_FILES["image"]["error"];
         }

//insert in the db
         include 'db_connection.php';
         $conn = OpenCon();
          //Getting Data from the form
          //jobCode is the primary key
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $id = $_POST['id'];
          $cellphone = $_POST['cellphone'];
          $email =  $_SESSION["email"];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $country = $_POST['country'];
          $postalCode = $_POST['postalCode'];
          $notes = $_POST['notes'];
          $type = $_POST['type'];

          $applicationDate = date("d-m-Y");

          function generateRandomString($length = 13) {
              $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $charactersLength = strlen($characters);
              $randomString = '';
              for ($i = 0; $i < $length; $i++) {
                  $randomString .= $characters[rand(0, $charactersLength - 1)];
              }
              return $randomString;
          }
          $booking_id = generateRandomString();

          // Enter Designations Into DB
         if(!$conn -> query(
           " INSERT INTO bookings (firstname, lastname,	id, cellphone, email , address, city , country ,postalCode, notes, id_location, poa_location, booking_id, type,                      applicationBookingDate , 	bookingApprovalDate	, testPaymentDate ,collectionDate, applicationFinished  	)
           VALUES ('$firstname','$lastname','$id', '$cellphone', '$email', '$address', '$city','$country','$postalCode','$notes','$id_location', '$poa_location',  '$booking_id', '$type', '$applicationDate',      'Pending', 'Pending', 'Pending', 'open'  )"
           ))
           {
             echo("Error description: ". $conn->error);
           }

         //CLose DB Connection
         CloseCon($conn);


          header("Location:../userside/pending.php?booking_id=$booking_id");
          exit();

?>
