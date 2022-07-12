<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vols</title>

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





<!-- book section starts  -->

<section id="recherche">
    
    <div class="book">
        <h1 class="heading">
            <span>R</span>
            <span>E</span>
            <span>C</span>
            <span>H</span>
            <span>E</span>
            <span>R</span>
            <span>H</span>
            <span>E</span>
            <span>R</span>
        
        </h1>
    
        <div class="row">
            
            <form action="">
                 <div class="inputBox">
                     <div class="condition">Allez-retour<input type="radio"></div>
                    
                    
                    <h3>Sens unique</h3>
                    <input type="radio">
                </div>
               
                <div class="inputBox">
                    <h3>Où aller</h3>
                    <input type="text" placeholder="Ville de depart">
                </div>
                <div class="inputBox">
                    <h3>Où aller</h3>
                    <input type="text" placeholder="Ville d'arrivée">
                </div>
                <div class="inputBox">
                    <h3>Combien</h3>
                    <input type="number" placeholder="nombre d'invités">
                </div>
                <div class="inputBox">
                    <h3>Départ</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>Arrivées</h3>
                    <input type="date">
                </div>
                
                <input type="submit" class="btn" value="Reserve maintenant">
            </form>

        </div>

    </div>
   
    
    
</section>

<!-- book section ends -->

<div class="reserve">
    <h1>Rechercher des vols</h1>
    <div class="row">
        <h2>Allez-retour</h2>
        <input type="radio">
        <h2>Sens unique</h2>
        <input type="radio">
    </div>
</div>






<!-- book section starts  -->

<section class="book">

    <h1 class="heading">
        <span>R</span>
        <span>E</span>
        <span>C</span>
        <span>H</span>
        <span>E</span>
        <span>R</span>
        <span>H</span>
        <span>E</span>
        <span>R</span>
       
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>Où aller</h3>
                <input type="text" placeholder="nom de lieu">
            </div>
            <div class="inputBox">
                <h3>Combien</h3>
                <input type="number" placeholder="nombre d'invités">
            </div>
            <div class="inputBox">
                <h3>Arrivées</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>Départ</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="Reserve maintenant">
        </form>

    </div>

</section>

<!-- book section ends -->







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