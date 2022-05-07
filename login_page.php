

<?php
include("db_connection.php");
session_start();

if (isset($_POST['submitButton'])) {

  if (!empty($_POST['EmailAdresse']) && !empty($_POST['Password'])) {

    $email = $_POST['EmailAdresse'];
    $password = $_POST['Password'];

    $myQuery = "SELECT * FROM clients WHERE email_client ='$email' LIMIT 1 ;";
    $result = mysqli_query($link, $myQuery);

    if ($result && mysqli_num_rows($result) > 0) {
      $data = mysqli_fetch_assoc($result);

      if ($data['pass_client'] == $password) {

        $_SESSION['IsLogedIn'] = true;
        $_SESSION['userName'] = $data['nom_client'];
        $_SESSION['userId']   = $data['id_client'];
        echo "Loged in Sucefully !";
        header("location:shoping_page.php");
      }

      echo "Wrong Password or email ";
    } elseif (!$result) {
      echo "erreur";
    }
  }
  echo "please enter valid infos";
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>

  <link rel="stylesheet" href="login_page.css">

</head>

<body>
  <header class="header">
    <p class="logo"> Maroc PC</p>
  </header>


  <div id="main" style="background-image: url(/MarocPC/Images/LoginPage.jpg); height: 800px; width: 1300px; display: block; background-size: 100%; background-position: center; background-size: cover; ">

    <form class="loginBox" action="login_page.php" method="post">

      <h1>Login</h1>
      <input type="text" name="EmailAdresse" placeholder="Veuillez saisir votre email ">
      <input type="text" name="Password" placeholder="Veuillez saisir votre password">
      <input type="submit" name="submitButton" value="Login">
      <br> <br>
      <a href="signin_page.php" class="returnLink">Vous n'avez pas de compte ? <br> Inscrivez-vous </a>

    </form>

  </div>

  <div class="contactUs">
    <p style="font-size: 40px;">Contact Us</p>
    <p>Email &nbsp; &nbsp; : conatctmarocpc@gmail.com <br>
      Adresse &nbsp; : Route d Eljadida, KM 7, CASABLANCA, Maroc <br>
      Télephone : 212 522 231 560/565 <br>
      Fax &nbsp; &nbsp; &nbsp; : 212 522 252 245 <br>
    </p>
  </div>

</body>

</html>
