<?php
session_start();
 require 'connection.php';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
 $loginuser = $_SESSION['login_user'];
 $signature =$_POST['ll'];
 $sql = "Update bankdetails set sign = '$signature' where username = '$loginuser' ";
      $result = mysqli_query($db,$sql);
	  header("location: Userfrontend.php");
	}

?>
