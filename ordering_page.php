<?php

include("db_connection.php");
session_start();

if (isset($_SESSION['IsLogedIn']) && $_SESSION['IsLogedIn'] == true) {
  $name = $_SESSION['userName'];
} else {
  header("location:LoginPage.php");
}
?>

<!DOCTYPE html>
<html>

<head>

  <script type="text/javascript">
    name = '<?php echo $name; ?>';

    function AlertFunction() {
      alert("Votre commande sera bientôt livrée " + name + " !")
    }
  </script>

  <title> Ordering Page</title>

  <link rel="stylesheet" href="OrderingPageCSS.css">


</head>

<body>
  <div class="header">
    <p class="logo"> Maroc PC</p>
  </div>


  <div id="main" style="background-image: url(/MarocPC/Images/Purchasing.jpg); height: 800px; width: 1300px; display: block; background-size: 100%; background-position: center; background-size: cover; ">

    <form class="OrderingBox" action="OrderingPage.php" method="post">

      <h5> Acheter <?php echo ($_SESSION['ItemToBuy']); ?>
        <br> Prix : <?php echo ($_SESSION['ItemPrice']); ?> Dirham
      </h5>

      <input type="text" name="creditCard" placeholder=" votre numéro de carte de crédit ">

      <input type="text" name="OrderAdresse" placeholder="votre adresse ">

      <input type="password" name="password" placeholder=" votre mot de passe ">

      <input type="submit" name="buy" value="Commandez" style="color: black;">

      <a href="http://localhost/MarocPc/CustomerPage.php"> retourner ici</a>
    </form>

    <?php if (isset($_POST['buy'])) {
      # code... 
      if (!empty($_POST['creditCard']) && !empty($_POST['OrderAdresse']) && !empty($_POST['password'])) {

        $id_client = $_SESSION['userId'];
        $id_produit    = $_SESSION['ItemId'];
        $in = $_SESSION['ItemInventaire'];


        $myQuery = "INSERT INTO achat (id_client , id_produit ) VALUES ('$id_client','$id_produit');";
        $mySecondQuery = "UPDATE produits SET inventaire_produit ='$in' WHERE id_produit = ' $id_produit'; ";
        $result = mysqli_query($link, $myQuery);
        $Secondresult = mysqli_query($link, $mySecondQuery);
        if ($result && $Secondresult) {
          header("location:ShopingPage.php");
        } elseif (!$result && !$Secondresult) {
          echo "erreur";
        }
      }
    }
    ?>
  </div>


  <div class="contactUs">
    <p style="font-size: 40px;">Contact Us</p>
    <p>Email &nbsp; &nbsp; : contactmarocpc@gmail.com <br>
      Adresse &nbsp; : Route d Eljadida, KM 7, CASABLANCA, Maroc <br>
      Télephone : 212 522 231 560/565 <br>
      Fax &nbsp; &nbsp; &nbsp; : 212 522 252 245 <br>


    </p>
  </div>
</body>

</html>
