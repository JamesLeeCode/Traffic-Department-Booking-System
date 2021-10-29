<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $id = $_GET['id'];

 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " UPDATE bookings SET bookingApprovalDate = 'Denied' WHERE booking_id = '$id' "
   ))
   {
     echo("Error description: ". $mysqli->error);
   }

 //CLose DB Connection
 CloseCon($conn);

  header("Location:../userside/adminDashboard.php");
  exit();
 ?>
