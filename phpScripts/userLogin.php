<?php

 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

  $user = mysqli_real_escape_string( $conn, $_POST['email']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


 $query = "SELECT * FROM users WHERE email	= '".$user ."' AND password = '".$password."'  ";
 $result = mysqli_query( $conn,  $query);

if(mysqli_num_rows( $result)==1)
{
  header("Location:../userside/index.php?user=$user");
  exit();
}
else {
  header("Location:../index.php?status=error");
  exit();
}


 //CLose DB Connection
  CloseCon($conn);


 ?>
