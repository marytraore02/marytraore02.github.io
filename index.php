<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodvol</title>

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

       <a href="#" class="logo"><span>G</span>oodvol<span>.</span></a>

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

    <form action="info.php" class="search-bar-container">
        <input type="search"  name="search_p" id="search-bar" placeholder="search here...">
        <label for="search-bar" name="submit_p" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->
    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="index.php" method="POST">
            <h3>login</h3>
                <label for="email">Email</label>
                <input type="email" name="email" class="box" placeholder="email" id="email">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" class="box" placeholder="password" id="password">
                <br>
                <input type="submit" value="Se connecter" class="btn" name="actionauth">
                
                <input type="checkbox" id="remember">
                <label for="remember">Se souvenir de moi</label>
                <p>password oublié? <a href="#">cliqué ici</a></p>
                <p>s'inscrire? <a href="signup.php">Sign up</a></p>
        </form>
    </div>

    
    <?php
        include_once 'Tvoyageur.php';
        if(isset($_POST['actionauth'])){
            $email=$_POST['email'];
            $pass=$_POST['password'];
            
            $n=Tvoyageur::index($email, $pass);
            if($n!=0){
                session_start();
                $_SESSION['slog']=$email;
                ?>
                <script>
                window.location='reservation.php';
                </script>
                <?php
            }else{
                echo "<h1 style='color: red'>login ou pass incorrect !!</h1>";
            }
            }
        ?>



<section class="home" id="home">

    <div class="content">

            <div class="wrapper">
            <div class="container">
            <div class="row full-screen">
                <div class="row">
                    <div class="accueil-content"> 
                        <div class="block">
                            <div class="subTitle">
                                <p>Disponible partout aux Mali</p>
                            </div>
                            
                             <h3>Bienvenue </br> Rélaxez vous et profiter d'une experience Pleine</br> </h3>
                            <h2>Goodvol vos tickets depuis chez vous</h2>
                             
                             <h2>Les tarifs les plus bat, Réchercher et comparer</h2>
                            <div class="v-btn">
                                <a href="Vols.php">Reservez maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>


    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- starter section ends -->



<!-- satrter section starts 
  <section class="starter">
        <div class="content">
          <p class="subTitle">Meilleurs destinations dans le monde</p>
          <h1 class="title">
            Travel, <span>enjoy</span> and live a new and full life
          </h1>
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam
            molestias, vel aliquid at praesentium quo.
          </div>
          <div class="last">
            <button>Find out more</button>
            <div class="play">
              <button><i class="fas fa-play"></i></button>
              <span>Play Demo</span>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="images/traveller1.png" alt="" />
        </div>
 -->
<!-- home section starts -->






<!-- packages section starts  -->

<section class="packages" id="packages">
    <h1 class="heading">
        <span>P</span>
        <span>A</span>
        <span>C</span>
        <span>K</span>
        <span>A</span>
        <span>G</span>
        <span>E</span>
        <span>S</span>
    </h1>

            <?php


                // session_start();

                $con=mysqli_connect('localhost','root','');


                mysqli_select_db($con,'goodvol');

                $q="select * from packages";
                $query=mysqli_query($con,$q);
                while ($res=mysqli_fetch_array($query)) {

                ?>

            
    <div class="box-container">

        <div class="box">
            <img src=<?php echo $res['image']; ?>  alt="L'image de la ville ou localité">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $res['nom']; ?> </h3>
                <p><?php echo $res['description']; ?> </p>
                <div class="stars">
                <?php echo $res['evaluation']; ?>
                <!--  <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    -->
                </div>
                <div class="price"> <?php echo $res['prix']; ?> <span><?php echo $res['oldprix']; ?></span> </div>
                <a href="info.php" class="btn">Reserve maintenant</a>
            </div>
        </div>
        <!-- 
        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">Reserve maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">Reserve maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">Reserve maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">Reserve maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">Reserve maintenant</a>
            </div>
        </div>

        -->


    </div>
    <?php } ?>

</section>

<!-- packages section ends -->




<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>



    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Hôtels abordables</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Nourriture et boissons</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Guide de sécurité</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Autour du monde</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Voyage le plus rapide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Aventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>



    <?php


    // session_start();

    $con=mysqli_connect('localhost','root','');


    mysqli_select_db($con,'goodvol');

    $q="select * from gallery";
    $query=mysqli_query($con,$q);
    while ($res=mysqli_fetch_array($query)) {

    ?>

    <div class="box-container">

        <div class="box">
            <img src=<?php echo $res['image']; ?> alt="">
            <div class="content">
                <h3><?php echo $res['nom']; ?></h3>
                <p><?php echo $res['description']; ?></p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>

        <!--
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>endroits extraordinaires</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">voir plus</a>
            </div>
        </div>
    -->


    </div>

    
<?php } ?>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <?php


    // session_start();

    $con=mysqli_connect('localhost','root','');


    mysqli_select_db($con,'goodvol');

    $q="select * from review";
    $query=mysqli_query($con,$q);
    while ($res=mysqli_fetch_array($query)) {

?>

    <div class="swiper-container review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="box">
                     
                            <img src=<?php echo $res['image']; ?> alt="">
                            <h3><?php echo $res['nom']; ?></h3>
                            <p><?php echo $res['description']; ?></p>
                            <div class="stars">
                            <?php echo $res['evaluation']; ?>
                            <!-- <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                -->
                            </div>
                        </div>
                       
                    </div>
                   
        
                
                   
                 <!--
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic2.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic3.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic4.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                       -->
                </div>
            </div>
   
    <?php } ?>

</section>

<!-- review section ends -->


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