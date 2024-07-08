<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="js/header.js">
    <style>
        nav .nav-list li a {
        color:black;
        }
        #libtn button{
            padding:5px 20px;
            font-size:18px;
            background:green;
            color:white;
            outline:none;
            font-weight:600;
            border:none;
            letter-spacing:2px;
            border-radius:8px;
            transition:.3s all ease;
        }
        #libtn button:hover{
            background:whitesmoke;
            color:green;
            border:1px solid grey;
        }
    </style>
</head>
<body>
    <!-- navigation section starts -->
      <section id="main-header">
     <header>
        <nav>
            <div class="logo">LOGO</div>
            <div class="nav-list">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php
            if(!isset($_SESSION['AdminLoginId']) && (!isset($_SESSION['UserLoginId']))){?>
            <li>
                <a href="login.php">Login</a>
            </li>
            <?php } else if(isset($_SESSION['UserLoginId']) || (isset($_SESSION['AdminLoginId']))){?>
             
            <?php } ?>                    
            <?php
            if(!isset($_SESSION['AdminLoginId']) && (!isset($_SESSION['UserLoginId']))){?>
            <li>
                <a href="signup.php">Signup</a>
            </li>
            <?php } else if(isset($_SESSION['UserLoginId']) || (isset($_SESSION['AdminLoginId']))){?>
                
            <?php } ?>                   
             <li class="active"><a href="booking.php">StartBooking</a></li>
             <!-- ----------------booking------------------- -->
             <?php
            if(isset($_SESSION['AdminLoginId'])){?>
                <li id="libtn">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <button type="submit" name="logout">Log Out</button>
                </form>
                </li>
            <?php } else if(isset($_SESSION['UserLoginId'])){?>
                <li id="libtn">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <button type="submit" name="logout">Log Out</button>
                </form>
                </li>
            <?php } ?>
            <!-- ----------------booking------------------- -->

                </ul>
            </div>
        </nav>
     </header>
     </section>
    <!-- navigation section ends -->
</body>
</html>