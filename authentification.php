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
    <title>Login</title>

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
        <a href="authentification.php"> <i class="fas fa-user" id="login-btn"></i></a>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

      
<!-- login form container  -->
    <div class="login-form-container" style="padding-top:100px">

    <i class="fas fa-times" id="form-close"></i>

    <form action="authentification.php" method="POST">
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
            
            $n=Tvoyageur::authentification($email, $pass);
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
    </body>
</html>
