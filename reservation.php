<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <!-- header section starts  -->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>G</span>oodvol<span class="orange">.</span></a>

        <nav class="navbar">
            <a href="index.php"><i class="fa fa-home"></i> Accueil |</a>
            <a href="Vols.php"><i class="fa fa-plane"></i> Vols |</a>
            <a href="Vols+Hôtels.php"><i class="fa fa-building"></i> Vols+Hôtels |</a>
            <a href="Apropos.php"><i class="fa  fa-question-circle"></i> Apropos |</a>
            <a href="contact.php"><i class="fa  fa-question-circle"></i> contact |</a>
            <a href="Signup.php"><i class="fa fa-user-plus"></i> Sign up</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div> 

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>
    <!-- header section ends -->


    
    <?php
        include_once 'Tvoyage.php';
        session_start();
        if(empty($_SESSION['slog'])){
    ?>
        <script>
            window.location='authentification.php';
        </script>
    <?php
        }
    ?>


<section class="book" id="book" style="padding-top:100px;">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
    </h1>

    <div class="row">
      <form action="reservation.php" method="POST">
            <div class="inputBox">
            <h1>Reservation En ligne  :</h1>
                <h3>Ville de depart :</h3> <select name="vd">
                    <?php
                    $cur1= Tvoyage::chargervd();
                    while ($row = $cur1->fetch()) {
                        echo"<option value='$row[0]'>$row[0]</option>";
                    }
                    $cur1->closeCursor();
                    ?>
                </select>
                <br><br>
            </div>

            <div class="inputBox">
                <h3>Ville d'arrivée :</h3> <select name="va">
                    <?php
                    $cur2= Tvoyage::chargerva();
                    while ($row = $cur2->fetch()) {
                        echo"<option value='$row[0]'>$row[0]</option>";
                    }
                    $cur2->closeCursor();
                    ?>
                </select>
                <br><br>
            </div>
            <input type="submit" value="Rechercher" name="actionrechercher" class="btn"/>

        </form>
    </div>
</section>
    



    <section class="book" id="book" style="padding-top:100px;">
        <div class="row">
            <form action="">
                <div class="inputBox">
                     <?php
            if(isset($_POST['actionrechercher'])){
                $vd=$_POST['vd'];
                $va=$_POST['va'];
                $cur3= Tvoyage::trajetParVille($vd, $va);
                $n=$cur3->rowCount();
                if($n!=0){ 
                    echo "<table>";
                    echo "<tr>";
                    echo "<th><h2>Code</h2></th>";
                    echo "<th><h2>Heure depart</h2></th>";
                    echo "<th><h2>Ville depart</h2></th>";
                    echo "<th><h2>Heure arrivée</h2></th>";
                    echo "<th><h2>Ville arrivée</h2></th>";
                    echo "<th><h2>Prix</h2></th>";

                    
                    echo "<th><h2>reservation</h2></th>";
                
                    echo "</tr>";
                    
                    
                    while ($row = $cur3->fetch()) {
                        echo "<tr>";
                        echo "<form action='paiement.php' method='POST'>";
                    
    echo "<td><input type='text' readonly name='cv' value='$row[0]'/></td>";
                        
                        
                        
                        echo "<td><input type='text' value='$row[1]/></td>";
                        echo "<td><input type='text' value='$row[2]/></td>";
                        echo "<td><input type='text' value='$row[3]/></td>";
                        echo "<td><input type='text' value='$row[4]/></td>";
                        echo "<td><input type='text' value='$row[5]/></td>";

                        echo "<td><h2>Nombre villet</h2></td>";
                        echo "<td>";
                        echo "<input type='date'  name='db' />";
                        echo "<select name='nbrp'>";
                        for ($i = 1; $i <=20; $i++) {
                            echo"<option value='$i'>$i</option>";
                        }
                        echo "</select>";
                        echo "<input type='submit'  name='actionbook' value='reserver' />";
                        echo "</td>";
                        


                        echo "</form>";
                        echo "</tr>";
                        
                    }
                    $cur3->closeCursor();
                    echo "</table>";



/*
                    echo "<table>";
                    echo "<tr>";
                    echo "<th><h2>reservation</h2></th>";
                    echo "</tr>";

                    while ($row = $cur3->fetch()) {
                        echo "<tr>";
                        echo "<form action='paiement.php' method='POST'>";
        echo "<td><input type='text' readonly name='cv' value='$row[0]'/></td>";

                        echo "<td>";
                        echo "<input type='date'  name='db' />";
                        echo "<select name='nbrp'>";
                        for ($i = 1; $i <=20; $i++) {
                            echo"<option value='$i'>$i</option>";
                        }
                        echo "</select>";
                        echo "<input type='submit'  name='actionbook' value='reserver' />";
                        echo "</td>";
                        
                        echo "</form>";
                        echo "</tr>";
                    }
                    $cur3->closeCursor();
                    echo "</table>";
*/



                    
                }else{
                    echo "PAS DE TRAJET !!";
                }
            }
            ?>
                </div>
            </form>
        </div>
       
    </section>
 
    
    
<!-- brand section  -->
<section class="brand-container">

<div class="swiper-container brand-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
    </div>
</div>

</section>

<!-- footer section  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>A propos de nous</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
    </div>
    <div class="box">
        <h3>Nos localisations</h3>
        <a href="#">Mali</a>
        <a href="#">Sénégal</a>
        <a href="#">Guineé</a>
        <a href="#">Côte d'Ivore</a>
        <a href="#">Bénin</a>
    </div>
    <div class="box">
        <h3>Liens rapides</h3>
        <a href="index.html">home</a>
        <a href="#">book</a>
        <a href="#">packages</a>
        <a href="#">services</a>
        <a href="#">gallery</a>
        <a href="#">review</a>
        <a href="contact.html">contact</a>
    </div>
    <div class="box">
        <h3>Suivez-nous</h3>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
        <a href="#">twitter</a>
        <a href="#">linkedin</a>
    </div>

</div>

<h1 class="credit"> creer par <span> M. Mary TRAORE (concepteur de site web) </span> | tous les droits sont réservés! <br>
  <em> <span class="orange">.</span>Projet d'étude informatique</em>
</h1>

<div class="box">  </div>  

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->

<script src="js/script.js"></script>
        
    </body>
</html>
