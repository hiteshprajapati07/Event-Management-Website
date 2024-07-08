<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .signup .signupform{
        box-shadow: 0px 10px 10px 0px grey;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>

    <section class="signup">
    <img src="assets\loginimage6.jpg" alt="">
    <div class="signupform">
        <h1>CREATE ACCOUNT</h1>
        <form action="signupphp.php" method="post">
            <div class="input">
                <div>
                <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Your Name">
                </div>
                <div>
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email"placeholder="Your Email">
                </div>
                <div>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Your Password">
                </div>
                <div>
                <i class="fa-solid fa-key"></i>
                <input type="password" name="repeatpassword" placeholder="Repeat Your Password">
                </div>
                <div>
                    <p></p>
                <button type="submit" name="submit">SIGN UP</button>        
                </div>
            </div>
        </form>
    </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>