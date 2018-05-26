<?php
session_start();
   require 'connection.php';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myblock = mysqli_real_escape_string($db,$_POST['block']);
      $myusername = $_SESSION['username'];
      $sql = "update bankdetails set blockhashes=concat(concat(blockhashes,','),'$myblock') where username='$myusername'";
      $result = mysqli_query($db,$sql);
      
   }
?>