<?php 
   include("ConnectionBD.php");
   include("TousLesFonctions.php");

  
 ?>
 
<!DOCTYPE html>
<!-- This is the main page. 
it contains these sections : 

     -The Header :
                  - The Logo
                  - "Profile" button(Takes the user to Login Page ).
                  - "Search"  button(Search for particular product).
                  - "Shop"    button(Take the user to full naviation mode).
      - The Main :
                  - Scroll effect of some products.

      - The Footer : 
                    - contact us (showing some basic informations about Maroc PC, Like phone number, email adress... ).
 -->
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="description" content="this is Reda Fillali Project">
	<title>Maroc PC</title>
	<style type="text/css">

		#header {
			  color: black;
			  background-color: yellow;
			  padding: 14px;
		}


		.logo {
            font-size: 40px;
			font-weight: bolder;
			margin-top: 30px;
			font-family: monospace;
        }
       
      
        .Buttons button {
        	position: relative;
        	bottom: 85px;
        	left: 900px;
        	float: left;
        	background-color:black;
        	margin-top: 3px;
            border-radius: 20px;
            color: white;
            padding: 12px 28px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            font-family: monospace;
        }

		
	
	</style>

	
</head>
<body>
	
	<div id="header">

		<p class="logo" > Maroc PC</p> 
		</div> 

		 <div class="Buttons "> 

		  <a href="http://localhost/MarocPc/LoginPage.php"> <button type="button"> Login </button> </a>
		  <a href="http://localhost/MarocPc/PurchasinPage.php"><button type="button"> Shop </button> </a>
		  <a href="http://localhost/MarocPc/CustomerPage.php"><button type="button"> Profile </button> </a>
		</div>
		

	
	<div id="main" style="background-image: url(/MarocPC/Images/MainPage.jpg); height: 800px; width: 1300px; display: block; background-size: 100%; background-position: center; background-size: cover; ">
         
		
	</div>


	 <div align="center" style="font-weight: bold; background-color: yellow ;display:inline-block; width: 1300px;">
        <p style="font-size: 40px;">Contact Us</p> 
         <p>Email &nbsp; &nbsp; : conatctmarocpc@gmail.com <br>
 Adress &nbsp; : Route d Eljadida, KM 7, CASABLANCA, Maroc <br>
 Télephone : 212 522 231 560/565 <br>
 Fax &nbsp; &nbsp; &nbsp; : 212 522 252 245 <br>
</p></div>
       
       
</body>
</html>