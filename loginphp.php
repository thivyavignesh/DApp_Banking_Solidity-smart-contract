<?php
  require 'connection.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['lusername']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['lpassword']); 
      $sql = "SELECT * FROM bankdetails WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $count = mysqli_num_rows($result);
      if($count == 1) {
      $_SESSION['login_user'] = $myusername;
		 $_SESSION['fname']=$row["fname"];
       $_SESSION['public_key']='';
       $_SESSION['admin_public_key']=$row["publickey"];
		 if($myusername == "admin1" || $myusername == "admin2" || $myusername == "admin3" ||  $myusername == "admin" )
			header("location: authenticate.php");
		 else
			 header("location: Userfrontend.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   ?>