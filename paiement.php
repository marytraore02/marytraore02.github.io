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
        <title>Paiement</title>

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
        include_once 'Tbillet.php';
        session_start();
        if(empty($_SESSION['slog'])){
            ?>
                <script>
                window.location='authentification.php';
                </script>
                <?php
        }
        $code=$_POST['cv'];
        $dateb=$_POST['db'];
        $nbrp=$_POST['nbrp'];
        $email=$_SESSION['slog'];
        $prix= Tvoyage::getprix($code);
        $total=$prix * $nbrp;
        
        ?>


        <section class="book" id="book" style="padding-top:100px;">

        <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>i</span>
        <span>m</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
         </h1>
         <br>  <br>
         <div class="row"> 
             <form action="">
                <div class="inputBox">
                    <h3>Total: <?=$total?> </h3>
                </div>
                <div class="inputBox">
                    <h3>Date: <?=$dateb?> </h3>
                </div>
                <div class="inputBox">
                    <h3>nombre de billets: <?=$nbrp?></h3>
                </div>
                <div class="inputBox">
                    <h3>code voyage: <?=$code?></h3>
                </div>
             </form> 
         </div>
             
            
                  <br>  <br>
                  <br>  <br>
                  <br>  <br>         

        <div class="row">
           <form method="POST" action="facture.php?cv=<?=$code?>&np=<?=$nbrp?>&db=<?=$dateb?>&email=<?=$email?>" >
                <div class="inputBox">
                    <h3>Nom</h3>
                    <input type="text" name="nom" placeholder="Détenteur de la carte" required />
	            </div>
                <div class="inputBox">
                    <h3>Numero</h3>
	                <input type="text" name="numero" placeholder="Numéro de la carte" required />
                </div>
                <div class="inputBox">
                    <span> <h3>Année d'expiration :</h3></span>
                         <select name="annee">
                             <?php 
                                for ($i = 2020; $i <=2030; $i++)
                                    {
                                        echo "<option value='$i'>$i</option>";   
                                    }
                            ?>     
                        </select> 
                </div>
                <div class="inputBox">
                    <span style="margin-left: 100"> <h3>Mois: </h3></span> 
                        <select name="mois">
                            <?php 
                                for ($i = 1; $i <=12; $i++)
                                    {
                                        echo "<option value='$i'>$i</option>";   
                                    }
                            ?>
                        </select> 
                </div>
			    <div class="inputBox">
                    <input type="text" name="crypto" placeholder="Cryptogramme" required />
	            </div>   
                <div class="inputBox">
	                <button type="submit" name="validate" class="btn">Valider</button>
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
