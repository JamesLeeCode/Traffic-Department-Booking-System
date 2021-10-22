<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $fullNames = $_POST['fullNames'];
  $email = $_POST['email'];
  $password = $_POST['password'];

 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO users (fullName,	email,	password	)
   VALUES ('$fullNames','$email','$password')"
   ))
   {
     echo("Error description: ". $mysqli->error);
   }

 //CLose DB Connection
 CloseCon($conn);


  header("Location:../index.php?statusRegister=register");
  exit();
 ?>
