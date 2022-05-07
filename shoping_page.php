<?php

include("db_connection.php");

session_start();

if (isset($_SESSION['IsLogedIn']) && $_SESSION['IsLogedIn'] == true) {
} else {
  header("location:LoginPage.php");
}

?>

<!DOCTYPE html>
<html>

<head>

  <title>Shoping Page</title>
  <script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
  <link rel="stylesheet" href="shoping_page.css">


</head>

<body>
  <div class="header">
    <p class="logo"> Maroc PC </p>
  </div>

  <div style="height: 800px; width: 1300px; display: block;">

    <div class="slideshow-container">

      <form action="ShopingPage.php" method="post">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="/MarocPC/Images/sampleMonitor.jpg" style="width:100%">
          <input class="buyButton" type="submit" name="buyButton1" value="Acheter">

          <div class="text">
            <p style="color:white;">LG 27GN950-B</p>
          </div>

        </div>

        <div class="mySlides fade">

          <div class="numbertext">2 / 3</div>
          <img src="/MarocPC/Images/samplePC.png" style="width:100%">
          <input class="buyButton" type="submit" name="buyButton2" value="Acheter">
          <div class="text">
            <p> CyberPowerPC Gamer Extreme VR</p>
          </div>
        </div>


        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="/MarocPC/Images/samplePrinter.jpeg" style="width:100%">
          <input class="buyButton" type="submit" name="buyButton3" value="Acheter">
          <div class="text">
            <p> HP DeskJet Plus 4120</p>
          </div>

      </form>


      <?php

      if (isset($_POST['buyButton1'])) {

        $myQuery = "SELECT * FROM produits WHERE nom_produit ='LG 27GN950-B' LIMIT 1 ;";

        $result = mysqli_query($link, $myQuery);

        if ($result && mysqli_num_rows($result) > 0) {

          $data = mysqli_fetch_assoc($result);

          $_SESSION['ItemPrice'] = $data['prix_produit'];
          $_SESSION['ItemId'] = $data['id_produit'];
          $_SESSION['ItemInventaire'] = $data['invenatire_produit'];
        }

        $_SESSION['ItemToBuy'] = "LG 27GN950-B";
        header("location:ordering_page.php");
      }


      if (isset($_POST['buyButton2'])) {

        $myQuery = "SELECT * FROM produits WHERE nom_produit ='CyberPowerPC Gamer Extreme VR' LIMIT 1 ;";

        $result = mysqli_query($link, $myQuery);

        if ($result && mysqli_num_rows($result) > 0) {

          $data = mysqli_fetch_assoc($result);

          $_SESSION['ItemPrice'] = $data['prix_produit'];
        }

        $_SESSION['ItemToBuy'] = "CyberPowerPC Gamer Extreme VR";
        header("location:ordering_page.php");
      }

      if (isset($_POST['buyButton3'])) {

        $myQuery = "SELECT * FROM produits WHERE nom_produit ='HP DeskJet Plus 4120' LIMIT 1 ;";

        $result = mysqli_query($link, $myQuery);

        if ($result && mysqli_num_rows($result) > 0) {

          $data = mysqli_fetch_assoc($result);

          $_SESSION['ItemPrice'] = $data['prix_produit'];
        }
        $_SESSION['ItemToBuy'] = "HP DeskJet Plus 4120";
        header("location:orderin_page.php");
      }

      ?>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>

  </div>
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
