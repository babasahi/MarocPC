<?php 
  
  session_start();

   include("ConnectionBD.php");
   include("TousLesFonctions.php");

      

    if( $_SERVER['REQUEST_METHOD'] == "POST")
  {
       // something was posted

       
       $NomComplet   = $_POST['NomComplet'];
       $AdresseEmail = $_POST['EmailAdresse'];
       $Password     = $_POST['Password'];


       // check valid infos
  if ( !empty( $AdresseEmail) && !empty($Password && !empty($NomComplet) && !is_numeric($NomComplet)) ){

           // save to data base
           $id = num_aleatoire(20);
            $enregist_au_bd = "INSERT INTO clients (id_client , nom_client, email_client, pass_client) VALUES ('$id','$NomComplet','$AdresseEmail','$Password')";

            mysqli_query($link ,$enregist_au_bd);

           header("Location:LoginPage.php");
           die();

      } else {
        echo "Veuillez saisir des informations valides !";
      }
    }
 ?>

 <!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  
  <link rel="stylesheet" href="mycss.css">
  
  <style type="text/css">
    #header {
      
        max-height: 10%;
        color: black;
        background-color: yellow;
        padding: 18px;
    }

    .logo {
      font-size: 40px;
      font-weight: bolder;
      margin-top: 30px;
      font-family: monospace;
        }
        
          
         
  </style>
</head>
<body>
  <div id="header"> <p class="logo"> Maroc PC</p> 
   </div>
  

         <div id="main" style="background-image: url(/MarocPC/Images/LoginPage.jpg); height: 800px; width: 1300px; display: block; background-size: 100%; background-position: center; background-size: cover; ">
         

          <form class="loginBox" action="LoginPage.php" method="post" >

            <h1>Sign in</h1>
       <input type="text" name="NomComplet" id="nomcomplet" placeholder="Nom Complet">
       <input type="text" name="EmailAdresse" id="email" placeholder="Veuillez saisir votre email "> 
       <input type="password" name="Password" id="password" placeholder="Veuillez saisir votre password">
       <input type="submit" name="submitButton" value="Login">
       <br> <br>

        <a href="LoginPage.php" style="font-size: 14px;">Vous n'avez pas de compte ? <br> Inscrivez-vous </a>
       
       </form>
      
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