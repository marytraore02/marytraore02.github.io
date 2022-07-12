<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apropos</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/apropos.css"> 

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

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="email">
        <input type="password" class="box" placeholder="password">
        <input type="submit" value="Se connecter" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">Se souvenir de moi</label>
        <p>password oublié? <a href="#">cliqué ici</a></p>
        <p>s'inscrire? <a href="signup.php">Sign up</a></p>
    </form>

</div>

<!-- home section starts  -->



<article>
    <section class="presentation">
        <div class="sec">
           <h1 class="titre1">Qui suis-je ?</h1>
           <div class="left">
            <img src="images/pic2.png" alt="ma photo">
        </div>
        <div class="right">
            <p>Je me nome Mary TRAORE, étudiant en Institut Supérieur d'Informatique et Management(ISIM) à Hamdalaye ACI 2000 dans l'imeuble BALDE.</p>
            <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla</p>
            <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla</p>
        </div>
    </div>
</section>

    <section class="parcours">
        <h1 class="titre1">Parcours et experiences professionnelles</h1>
        <div class="sec">
            <h2 class="titre2">Parcours scolaires</h2>
            <div class="exp">
                <div class="left">
                    <h4>2015 - 2016</h4>
                </div>
                <div class="right">
                    <h4>DEF</h4>
                    <p>Obtention du Diplôme Etude Fondamentale au Franco-ArabeII.</p>
                </div>
            </div>
            <h2 class="titre2">Le lycée</h2>
             <div class="exp">
                <div class="left">
                    <h4>2016 - 2017</h4>
                </div>
                <div class="right">
                    <h4>Dixième(10) année</h4>
                    <p>Lycée Technique de Bamako(LTB).</p>
                    <p><em>Dieuxième COMMUNE.</em></p>
                </div>
            </div>
              <div class="exp">
                <div class="left">
                    <h4>2017 - 2018</h4>
                </div>
                <div class="right">
                    <h4>Onsième(11) année</h4h4>
                    <p>Lycée Technique de Bamako(LTB) en  </p>
                    <p><em>Filière: Science et Tecnologie de Gestion (STG).</em></p>
                    <p><em>Spécialité: GESTION COMMERCIAL.</em></p>
                </div>
            </div>
            <div class="exp">
                <div class="left">
                    <h4>2018 - 2019</h4>
                </div>
                <div class="right">
                    <h4>Terminal</h4>
                    <p>L'Obtention du Baccalauréat.</p>
                     <p><em>Filière: Science et Tecnologie de Gestion (STG).</em></p>
                    <p><em>Spécialité: GESTION COMMERCIAL.</em></p>
                </div>
            </div>
        </div>
    </section>

    <section class="competences">
        <h1 class="titre1">Compétences et niveux</h1>
        <div class="sec">
            <div class="cleft">
                <div class="sous">
                    <div class="sousleft">
                        <h3>Compétences</h3>
                    </div>
                    <div class="sousright">
                        <h3>Niveaux</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <p>HTML / CSS</p>
                    </div>
                    <div class="sousright">
                       <p>AVANCE</p>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <p>JAVASCRIPT</p>
                    </div>
                    <div class="sousright">
                        <p>INTERMEDIARE</p>
                    </div>
                </div>
            </div>
            <div class="cright">
                    <div class="sous">
                    <div class="sousleft">
                        <h3>Compétences</h3>
                    </div>
                    <div class="sousright">
                        <h3>Niveaux</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <p>PHP - MYSQL</p>
                    </div>
                    <div class="sousright">
                       <p>AVANCE</p>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <p>JAVA/J2EE</p>
                    </div>
                    <div class="sousright">
                        <p>AVANCE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recommandation">
        <h1 class="titre1">Recomandation (à telecharger)</h1>
        <div class="sec">
            <div class="reco">
                <h2>PrestaShop</h2>
                <div class="left">
                    <a href="fichier/courshtml.pdf" target="_blank"><img src="images/2.jpg"></a>
                </div>
                <div class="right">
                    <p>Je vous récommande un cours sur le langage HTML</p>
                </div>
            </div>
             <div class="reco">
                <h2>PrestaShop</h2>
                <div class="left">
                    <a href="fichier/courscss.pdf" target="_blank"><img src="images/2.jpg"></a>
                </div>
                <div class="right">
                    <p>Je vous récommande un cours sur le langage CSS</p>
                </div>
            </div>
        </div>
    </section>
</article>










<!-- brand section  -->
<div class="espace-brand">
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
</div>

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

<script src="js/script.js"></script>
</body>
</html>