<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
          #loginpage .login-div1 {
        box-shadow: 0px 10px 10px 0px grey;
}
    </style>
</head>
<body>
<?php 
    include("header.php");
    ?>

    <section id="loginpage">
    <img src="assets\loginimage6.jpg" alt="">
    <div class="login-div1">
        <form action="loginphp.php" method="post">
            <div class="form">
                <h1>Login Form</h1>
                <div>
                    <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Your Name" required>
                </div>
                <div>
                 <i class="fa-solid fa-lock"></i><input type="password" name="password" placeholder="Your Password" required>
                </div>                
                <div id="hiddenp">
                    <p></p>
                <button type="submit">LOGIN</button>        
                </div>            </div>
            <a href="" class="fp">Forgot Password?</a>
        </form>
    </div>
    </section>

    <!-- footer section starts -->
    <?php
     include("footer.php");
     ?>
    <!-- footer section ends -->
</body>
</html>
