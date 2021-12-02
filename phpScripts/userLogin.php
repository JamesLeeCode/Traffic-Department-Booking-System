<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

  $user = mysqli_real_escape_string( $conn, $_POST['email']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


 $query = "SELECT * FROM users WHERE email	= '".$user ."' AND password = '".$password."'  ";
 $result = mysqli_query( $conn,  $query);

 $_SESSION["email"] =   $_POST['email'];
 $user = $_POST['email'];
 $username = "";
if(mysqli_num_rows( $result)==1)
{
  while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['fullName'];
     $_SESSION["username"] = $username;
  }

  $sql = "SELECT * FROM bookings where email = '$user' AND applicationFinished = 'open' ";
  $result = $conn->query($sql);
  //Store the results in an array

  while ($row = mysqli_fetch_assoc($result)) {
       $_SESSION["booking_id"] = $row['booking_id'];
       $bookingid = $row['booking_id'];
    header("Location:../userside/pending.php?booking_id=$bookingid");
    exit();
  }

  header("Location:../userside/index.php");
  exit();
}
else {
  header("Location:../index.php?status=error");
  exit();
}


 //CLose DB Connection
  CloseCon($conn);


 ?>
