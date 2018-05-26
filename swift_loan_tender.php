<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Banking Decentralized Application</title>
<script type="text/javascript" src="/3E543440-4EEE-1641-A3A9-1B44A4733E61/main.js" charset="UTF-8"></script>
<script src="./node_modules/web3/dist/web3.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="swift.css">
<script>
	function logo() {
 window.location.href = "Login.html";
	}
</script>
</head>
<body onload="openCity(event, 'Home')">
<div class="he">
	<p><h1><center>Decentralized Application for Banking</center></h1></p>
	<input type="button" id="logout" onclick="logo()" value=" Log Out"> 
</div>
<p><h1><center>Welcome <?php session_start(); echo $_SESSION['login_user'] ?></center></h1></p>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home'); ClearSwitchFields();">
  <img src="img1.png" height="25px" width="25px " class="w3-round">
  Home</button>
  <button class="tablinks" onclick="openCity(event, 'Loan'); ClearSwitchFields();">
  <img src="img2.jpg" height="25px" width="25px " class="w3-round">
  Loan</button>
  <button class="tablinks" onclick="openCity(event, 'Tender'); ClearSwitchFields();">
  <img src="img3.png" height="25px" width="25px " class="w3-round">
  Tender</button>
  <button class="tablinks" onclick="openCity(event, 'Customer Care'); ClearSwitchFields();">
  <img src="img4.jpg" height="25px" width="25px " class="w3-round">
  Customer Care</button>
</div>
<div id="Home" class="tabcontent">
	<header>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="1.jpg" alt="Los Angeles" style="width:100%;">
			  </div>
			  <div class="item">
				<img src="2.jpg" alt="Chicago" style="width:100%;">
			  </div>
			  <div class="item">
				<img src="3.jpg" alt="New york" style="width:100%;">
			  </div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
	</header>
	</br>
	</br>
	</br>
	<div class ="middle">
		<div class="vertical-menu">
		  <a href="#"  class="active">Check Eligibility</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Personal Loan</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Two Wheeler Loan</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Home Loan</a>
		</div>
		<div class="vertical-menu">
		  <a href="#" class="active">Announcements</a>
		  <a href="#">Gail tender Results</a>
		  <a href="#">New Car Loan scheme </a>
		   <a href="#">Isro tender Results</a>
		</div>
		<div class="vertical-menu">
		  <a href="#" class="active">Quick Links</a>
		  <a href="#">Apply Now</a>
		  <a href="#">Locate us</a>
		   <a href="#">Products</a>
		</div>  
	</div>
	</br>
	</br>
	<footer>
		<h3>Visit us at </h3>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="30px" alt="Facebook" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="30px" alt="Twitter" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/google.png" width="30px" alt="Googleplus" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="30px" alt="Linkedin"/></a>
		<a href="#">
		<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="30px" alt="Pinterest" /></a>
	</footer> 
</div>

<div id="Loan" class="tabcontent">
   <div class="container">
   
        <h1>Loanee</h1>
		<div class="in">
		<label for="address" class="col-lg-2 control-label">Public Key of loanee</label>
        <input id="address" type="text" placeholder="<?php echo $_SESSION['public_key']; ?>" >
		</div>
		<div class="in">
		<label for="fName" class="col-lg-2 control-label">First Name</label>
        <input id="fName" type="text">
		</div>
		<div class="in">
        <label for="lName" class="col-lg-2 control-label">Last Name</label>
        <input id="lName" type="text">
		</div>
		<div class="in">
        <label for="amt" class="col-lg-2 control-label">Loan Amount(Rupees)</label>
        <input id="amt" type="text">
		</div>
		<div class="in">
		<label for="authkey" class="col-lg-2 control-label">Authenticator</label>
        <input id="authkey" type="text" placeholder="<?php echo $_SESSION['admin_public_key']; ?>">
		</div>
		<div class="in">
        <label for="privatekey" class="col-lg-2 control-label">Private key of Authenticator</label>
        <input id="privatekey" type="password">
		</div>
		<div class="in">
		<button id="buttonsign" onclick="generatesignature()">Generate sign</button>
		</div>
		<div class="in">
        <label for="authsign" class="col-lg-2 control-label">Sign</label>
        <input id="authsign" type="text">
		</div>
		<div class="in">
		<button id="button">Update Loanee</button>
		</div>

		<form method = "POST" action = "">
		<div class="in">
        <label for="instranst" class="col-lg-2 control-label">Block Hash</label>
        <input id="insTrans" name="block">
    	</div>
    	<div class="in">
		<button id="hash">Save Block Hash</button>
		</div>
		</form>



    	<div class="in">
		<img id="loader" src="https://loading.io/spinners/double-ring/lg.double-ring-spinner.gif">
		<h2 id="idloan"></h2>
        <span id="instructor"></span>
       	</div>

		<hr>
		<h1>Sanctioned Loan IDs</h1>	   
		<button id="butt">Get IDs</button>

		<span id="countIns"></span>
		<h2 id="loanes"></h2>

		<hr>

		<h1>Loanee Details</h1>
		<label for="add" class="col-lg-2 control-label">Loan ID</label>
		<input id="add" type="text">
		<div class="in">
		<button id="but">Get Loanee Details</button>
		</div><span id="loanees"></span>

		<hr>
    </div>
</div>

<div id="Tender" class="tabcontent">
<div class="container">
<h1>Tender Applicant Details</h1>
		<div class="in">
		<label for="tender_address" class="col-lg-2 control-label">Public Key Address</label>
        <input id="tender_address" type="text" placeholder="<?php echo $_SESSION['public_key']; ?>" >
    	</div>
		<div class="in">  
		<label for="orgname" class="col-lg-2 control-label">Organization Name</label>
        <input id="orgname" type="text">
		</div>
		<div class="in">  
        <label for="tender_amt" class="col-lg-2 control-label">Tender Amount(Rupees)</label>
		</div>
        <input id="tender_amt" type="text">
		<div class="in">  
		<label for="tender_duration" class="col-lg-2 control-label">Tender Duration(Months)</label>
		</div>
        <input id="tender_duration" type="text">
        <div class="in">
		<label for="tender_authkey" class="col-lg-2 control-label">Tender Authenticator</label>
        <input id="tender_authkey" type="text" placeholder="<?php echo $_SESSION['admin_public_key']; ?>">
        </div>
		<div class="in">
        <label for="privatekeyt" class="col-lg-2 control-label">Private key of Authenticator</label>
        <input id="privatekeyt" type="password">
		</div>
		<div class="in">
		<button id="buttonsignt" onclick="generatetender()">Generate sign</button>
		</div>
		<div class="in">
        <label for="tender_authsign" class="col-lg-2 control-label">Sign</label>
        <input id="tender_authsign" type="text">
		</div>
		<div class="in">
		<button id="tender_button">Submit Tender</button>
		</div>
		<h2 id="done"></h2>
		<hr>
		<h1>Tender winner Details</h1>
		<button id="tender_but">Get Tender winner</button>		
		<span id="tenderwinner"></span>
		<hr>
    </div>  
</div>


<div id="Customer Care" class="tabcontent">
	<div class="customercare" >
		<h1>Contact </h1>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="50px" alt="Facebook" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="50px" alt="Twitter" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/google.png" width="50px" alt="Googleplus" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="50px" alt="Linkedin"/></a>
		<a href="#">
		<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="50px" alt="Pinterest" /></a>
		<h1>Project Developers</h1>
		<h2>R.G.Thivyavignesh - 106114071</h2>
		<h2>R.Sharath         - 106114086</h2>
		<h2>K.Venkateshwaran  - 106114103</h2>
	</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	ClearFields();
}
</script>


<script>
       if (typeof web3 !== 'undefined') {
           web3 = new Web3(web3.currentProvider);
       } else {
           web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
       }

       web3.eth.defaultAccount = web3.eth.accounts[0];

        var PNBContract = web3.eth.contract([
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "tendpkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "org",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tender_dur",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "tender_amt",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "tender_authkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "tender_authsign",
				"type": "string"
			}
		],
		"name": "TendInfo",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_address",
				"type": "string"
			},
			{
				"name": "_fName",
				"type": "string"
			},
			{
				"name": "_lName",
				"type": "string"
			},
			{
				"name": "_amt",
				"type": "uint256"
			},
			{
				"name": "_authkey",
				"type": "string"
			},
			{
				"name": "_authsign",
				"type": "string"
			}
		],
		"name": "setLoanee",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "pkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "fName",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "lName",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "authkey",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "authsign",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "amt",
				"type": "uint256"
			}
		],
		"name": "LoaneeInfo",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_address",
				"type": "string"
			},
			{
				"name": "_org",
				"type": "string"
			},
			{
				"name": "_amt",
				"type": "uint256"
			},
			{
				"name": "_dur",
				"type": "uint256"
			},
			{
				"name": "_authkey",
				"type": "string"
			},
			{
				"name": "_authsign",
				"type": "string"
			}
		],
		"name": "setTend",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "countLoanee",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getendid",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getid",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "id",
				"type": "uint256"
			}
		],
		"name": "getLoanee",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "id",
				"type": "uint256"
			}
		],
		"name": "getTend",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "LoaneeAccts",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "minTender",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "TendAccts",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]);

       var PNB = PNBContract.at('0x1f7d6F718E6174e3909A43D10Bdf63097c2cdd00');
		console.log(PNB);
       var instEvent = PNB.LoaneeInfo({}, 'latest');

       instEvent.watch(function(error, result) {
           if (result) {
               if (result.blockHash != $("#insTrans").html())
                    $("#loader").hide();

                //$("#insTrans").html('Block hash: ' + result.blockHash);
                document.getElementById("insTrans").value = result.blockHash;
               $("#instructor").html(result.args.fName + ' ' + result.args.lName +'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( '+result.args.pkey+' )<br><br>'+'&nbsp;&nbsp;&nbsp;borrowed a sum of rupees   ' + result.args.amt+'<br>&nbsp;&nbsp;&nbsp;which was authenticated by<br><br>'+ result.args.authkey+'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( '+result.args.authsign+' )');


               PNB.getid((err, res) => {
           			if (res)
	               	$("#idloan").html('Loan Id: '+ res);
      		 	});

           } else {
                $("#loader").hide();
           }
       });

       $("#button").click(function() { //web3.eth.defaultAccount
            $("#loader").show();
            //console.log(document.getElementById("address").innerHTML);
           PNB.setLoanee.sendTransaction( document.getElementById("address").getAttribute("placeholder"), $("#fName").val(), $("#lName").val(), $("#amt").val(), document.getElementById("authkey").getAttribute("placeholder"), document.getElementById("authsign").value, {
            from:web3.eth.accounts[0],
            gas:4000000}, (err, res) => {
               if (err) {
                   console.log("error in set!")
                   $("#loader").hide();
               }
           });
           ClearFields();
       });

	   $("#but").click(function() {
            $("#loader").show();
			PNB.getLoanee($("#add").val(),(err, res) => {
               if (err) {
                   console.log("error in getLoanee!")
                   $("#loader").hide();
               }
               if (res) {
             $("#loanees").html('<b>Public Key:</b> '+res[0]+'<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Name:</b> '+ res[1] +' '+ res[2] + '<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Amt:</b> ' + res[3]+'<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Authenticator:</b> '+res[4]+'<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Authenticator Sign:</b> '+res[5]);
             	}
            });
			//out = out + '\n' + PNB.getLoanees().toString();
            
		  $("#loader").hide();
       });

	var i; 
	
	   $("#butt").click(function() {
            $("#loader").show();
			PNB.countLoanee((err, res) => {
           			if (res) {
           			var out ='0';
            		$("#countIns").html(res.c + ' Borrowers');
            		for(i = 1; i < res; i++) {
            			out += ' , '+ i;
            		}
            		$("#loanes").html(out); 
            	}
      		 	});
		  $("#loader").hide();
       });
       

       $("#tender_button").click(function() { //web3.eth.defaultAccount
            
           PNB.setTend.sendTransaction( document.getElementById("tender_address").getAttribute("placeholder"), $("#orgname").val(), $("#tender_duration").val(), $("#tender_amt").val(), document.getElementById("tender_authkey").getAttribute("placeholder"), document.getElementById("tender_authsign").value, {
            from:web3.eth.accounts[0],
            gas:4000000}, (err, res) => {
               if (err) {
                   console.log("error in set!")
                   
               }
               else {
               		//$("#done").html("Done!!");
               }
           });
           ClearFields();  
       });

	   var out;
	   $("#tender_but").click(function() {
            $("#loader").show();
			PNB.minTender((err, res) => {
               if (err) {
                   console.log("error in minTender!");
                   $("#loader").hide();
               }
               if (res) {
               	$("#tenderwinner").html('<b>Public Key:</b> '+res[0]+'<br><b>Organisation:</b> '+ res[1] + '<br><b>Amt(Rs):</b> ' + res[2]+'<br><b>Duration(Months):</b> ' + res[3]+'<br><b>Authenticator:</b> '+res[4]+'<br><b>Authenticator Sign:</b> '+res[5]);
               }
            });
			 
		  $("#loader").hide();
       });

</script> 
<script>
function ClearFields() {

     document.getElementById("fName").value = "";
     document.getElementById("lName").value = "";
	 document.getElementById("address").value = "";
	 document.getElementById("amt").value = "";
	 document.getElementById("tender_address").value = "";
	 document.getElementById("tender_amt").value = "";
	 document.getElementById("tender_duration").value = "";
	 document.getElementById("orgname").value = "";
	 document.getElementById("privatekey").value = "";
	 document.getElementById("privatekeyt").value = "";
	 document.getElementById("authsign").value = "";
	 document.getElementById("tender_authsign").value = "";
	 
}

function ClearSwitchFields() {
	document.getElementById("idloan").innerHTML = "";
	document.getElementById("instructor").innerHTML = "";
	document.getElementById("countIns").innerHTML = "";
	document.getElementById("loanes").innerHTML = "";
	document.getElementById("loanees").innerHTML = "";
	document.getElementById("tenderwinner").innerHTML = "";
	document.getElementById("done").innerHTML = "";
}

</script>     

<script language="JavaScript" type="text/javascript" src="https://kjur.github.io/jsrsasign/jsrsasign-all-min.js"></script>
<script type="text/javascript">
	function generatesignature()
	{
		var msg=document.getElementById("address").value + document.getElementById("fName").value +document.getElementById("lName").value + document.getElementById("amt").value + document.getElementById("authkey").value  ;
		var privatek=document.getElementById("privatekey").value;

 var rsa = new RSAKey();
  rsa.readPrivateKeyFromPEMString(privatek);
  var hashAlg = 'sha1';
  var hSig = rsa.sign(msg, hashAlg);
  signature=linebrk(hSig, 64);
  document.getElementById("authsign").value = linebrk(hSig, 64);
  
}

</script> 

<script type="text/javascript">
	
	function generatetender()
	{	//alert("hi");

		var msg=document.getElementById("tender_address").value + document.getElementById("orgname").value +document.getElementById("tender_duration").value + document.getElementById("tender_amt").value + document.getElementById("tender_authkey").value  ;
		var privatekt=document.getElementById("privatekeyt").value;
//alert("hi");
 var rsa = new RSAKey();
  rsa.readPrivateKeyFromPEMString(privatekt);
  var hashAlg = 'sha1';
  var hSig = rsa.sign(msg, hashAlg);
  signature=linebrk(hSig, 64);
  document.getElementById("tender_authsign").value = linebrk(hSig, 64);
  
}
</script>

<?php
	require 'connection.php';
   	if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myblock = mysqli_real_escape_string($db,$_POST['block']);
      $myusername = $_SESSION['username'];
      $sql = "update bankdetails set blockhashes=concat(concat(blockhashes,','),'$myblock') where username='$myusername'";
      $result = mysqli_query($db,$sql);
      
   }
?>
</body>
</html> 
