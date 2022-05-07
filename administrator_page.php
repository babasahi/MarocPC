<?php

include("db_connection.php");
session_start();

if (isset($_SESSION['IsLogedIn']) && $_SESSION['IsLogedIn'] == true) {
} else {
  header("location:login_page.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title> Administration Page</title>
  <link rel="stylesheet" href="administrator_page.css">

</head>

<body>
  <div class="header">
    <p class="logo"> Maroc PC</p>
  </div>
  <div class="main">


    <table align="center">
      <h2>Table clients</h2>
      <tr>
        <th> Id </th>
        <th> Nom et Prénom</th>
        <th> Email Adresse</th>
        <th> Date Registration</th>

      </tr>

      <?php
      $sql = "SELECT * FROM clients ";
      $result = mysqli_query($link, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id_client"] . "</td><td>" . $row["nom_client"] . "</td><td>"
            . $row["email_client"]  . "</td><td>"  . $row["date_login_client"] . "</td></tr> . ";
        }
        echo "</table>";
      } else {
        echo "0 données";
      }
      ?>
      <p> <br> <br> <br> <br></p>
    </table>

    <table align="center">
      <h2>Table Produits</h2>
      <tr>

        <th> Id </th>
        <th> Nom </th>
        <th> Prix Unitaire</th>
        <th> Inventaire</th>

      </tr>

      <?php
      $sql = "SELECT * FROM produits ";
      $result = mysqli_query($link, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id_produit"] . "</td><td>" . $row["nom_produit"] . "</td><td>"
            . $row["prix_produit"]  . "</td><td>"  . $row["inventaire_produit"] . "</td></tr> . ";
        }
        echo "</table>";
      } else {
        echo "0 données";
      }
      ?>
      <p> <br> <br> <br> <br></p>

    </table>

    <table align="center">
      <h2>Table achats</h2>
      <tr>

        <th> Id </th>
        <th> id_client </th>
        <th> id_produit</th>
        <th> date_achat</th>

      </tr>

      <?php
      $sql = "SELECT * FROM achat ";
      $result = mysqli_query($link, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id_achat"] . "</td><td>" . $row["id_client"] . "</td><td>"
            . $row["id_produit"]  . "</td><td>"  . $row["date_achat"] . "</td></tr> . ";
        }
        echo "</table>";
      } else {
        echo "0 données";
      }
      ?>
      <p> <br> <br> <br> <br></p>
    </table>

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
