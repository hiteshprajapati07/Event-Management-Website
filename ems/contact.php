<?php
session_start();
// if(!isset($_SESSION['AdminLoginId'])){
//     header("location: adminloginphp.php");
// }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include("header.php");?>
    <section id="contactsection">
        <img src="assets\contact1.jpeg" alt="">
        <div class="contactabsolute">
        <div class="contactus">
            <h1>Contact Us</h1>
            <div>
            <i class="fa-solid fa-location-dot"></i>
            <p>32,Avenue ve Newyork 321994 Newyork</p>
            </div>
            <div>
            <i class="fa-solid fa-envelope"></i>
            <p>hello@gmail.com</p>
            </div>
            <div>
            <i class="fa-solid fa-phone"></i>
            <p><b>Office 1:</b> +3342 4342 6463</p>
            </div>
            <div>
            <i class="fa-solid fa-phone"></i>
            <p><b>Office 2:</b> +3342 4342 6463</p>
            </div>
        </div>
        <div class="getintouch">
            <div class="getintouchheading">
                <h1>Get in Touch</h1>
                <p>Feel free to drop us a line below</p>
            </div>
            <form action="contactphp.php" method="post">
            <div class="contactinput">
                <input type="text" name="username" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button type="submit" name="submit" >SEND</button>
            </div>
            </form>
        </div>
        </div>
    </section>

    <?php include("footer.php");?>
    <?php include("logout.php"); ?>

</body>
</html>