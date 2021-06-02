<?php

include("ConnectionBD.php");

if (isset($_POST['submitButton'])) {

  if (!empty($_POST['EmailAdresse']) && !empty($_POST['NomComplet']) && !empty($_POST['Password'])) {

    $name = $_POST['NomComplet'];
    $email = $_POST['EmailAdresse'];
    $password = $_POST['Password'];

    $myQuery = "INSERT INTO clients (nom_client , email_client , pass_client) VALUES ('$name','$email','$password');";
    $result = mysqli_query($link, $myQuery);

    if ($result) {

      header("location:LoginPage.php");
    } elseif (!$result) {
      # code...

      echo "erreur";
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>

  <link rel="stylesheet" href="SigninPageCSS.css">


</head>

<body>
  <div class="header">
    <p class="logo"> Maroc PC</p>
  </div>


  <div id="main" style="background-image: url(/MarocPC/Images/LoginPage.jpg); height: 800px; width: 1300px; display: block; background-size: 100%; background-position: center; background-size: cover; ">


    <form class="SigninBox" action="SigninPage.php" method="post">

      <h1>Sign in</h1>
      <input type="text" name="NomComplet" placeholder="Nom Complet">
      <input type="text" name="EmailAdresse" placeholder="Veuillez saisir votre email ">
      <input type="password" name="Password" placeholder="Veuillez saisir votre password">
      <input type="submit" name="submitButton" value="Sign In">
      <br> <br>

      <a href="LoginPage.php" class="returnLink">Vous n'avez pas de compte ? <br> Inscrivez-vous </a>

    </form>

  </div>

  <div class="contactUs">
    <p style="font-size: 40px;">Contact Us</p>
    <p>Email &nbsp; &nbsp; : conatctmarocpc@gmail.com <br>
      Adress &nbsp; : Route d Eljadida, KM 7, CASABLANCA, Maroc <br>
      Télephone : 212 522 231 560/565 <br>
      Fax &nbsp; &nbsp; &nbsp; : 212 522 252 245 <br>
    </p>
  </div>



</body>

</html>
