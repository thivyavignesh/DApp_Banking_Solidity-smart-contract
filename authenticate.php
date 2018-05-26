<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Authenticate</title>
<script type="text/javascript" src="/3E543440-4EEE-1641-A3A9-1B44A4733E61/main.js" charset="UTF-8"></script>
<script src="./node_modules/web3/dist/web3.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    background-color: rgb(166, 194, 122);
    padding: 2px;
    font-family: 'Raleway','Source Sans Pro', 'Arial';
}
label {
    display:block;
	font-size:27px;	
	float:left;
	margin-bottom:30px;
}
#username {
	
    padding:10px;
    width: 50%;
	float:right;
	margin-right:20px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
p{
	margin-right:auto;
	margin-left:auto;
	font-size:27px;	
	text-align: center;
	font-family: 'Raleway','Source Sans Pro', 'Arial';

}
.in {
	clear:both;	
}
#button {
    margin: 2em 0;
    padding: 1em 4em;
    display:block;
	align-items: center;
    text-align: center;
	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
    text-decoration: none;
	border-radius: 50px 50px;
	font-size:20px;
	
}

</style>
</head>
<body>
<script>

   
</script>
<form method="POST" action="" >
		<div class="in">
		</br>
		</br>
		<label for="username" class="col-lg-2 control-label">Username</label>
        <input id="username" name="username" type="text">
		</div>
		<div class="in">
		<input type="submit" id="button" value="Get Info">
		</div>
		
		
</form>
<?php
session_start();
require 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $sql = "SELECT * FROM bankdetails WHERE username = '$myusername'";
	   $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $count = mysqli_num_rows($result);
         $_SESSION['public_key'] = $row['publickey'];
		 $_SESSION['sign']=$row['sign'];
		 $_SESSION['username']=$myusername;
		 header("location: Authenticate2.php");
      
  
   }



?>
</body>
</html>
		
		