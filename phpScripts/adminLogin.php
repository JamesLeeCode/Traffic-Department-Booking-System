<?php


if($_POST['email']=="admin@user" &&  $_POST['password']=="nopassword")
{
  header("Location:../userside/adminDashboard.php");
  exit();
}
else {
  header("Location:../adminLogin.php?status=error");
  exit();
}


 //CLose DB Connection
  CloseCon($conn);


 ?>
