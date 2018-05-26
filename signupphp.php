<?php
   require 'connection.php';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['susername']);
      $mypassword = mysqli_real_escape_string($db,$_POST['spassword']); 
	  $myfname = mysqli_real_escape_string($db,$_POST['sfname']);
	  $mypublickey = mysqli_real_escape_string($db,$_POST['spublickey']);
      $sql = "Insert into bankdetails values('$myfname','$mypublickey','$myusername','$mypassword','default','');";
      $result = mysqli_query($db,$sql);
	  header("location: login.html");
      
  
   }
   ?>