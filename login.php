<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>

    
    <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="login.php" method="POST">
    <h3>login</h3>
        <label for="email">Email</label>
        <input type="email" name="email" class="box" placeholder="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" class="box" placeholder="password" id="password">
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
