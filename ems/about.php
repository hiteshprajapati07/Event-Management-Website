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
    <style>
        .about-us{
            display:flex;
            flex-direction:column;
            margin:20px 40px;
        }
        .about-us .aboutdiv{
            display:flex;
        }
        .about-us h1{
            text-align:center;
            font-size:50px;
            padding:20px 0px;
        }
        .about-us .aboutdiv{
            margin:10px 50px;
        }
        .about-us .aboutdiv img{
            width:800px;
            border-radius:8px;
        }
        .about-us .aboutdiv div{
            padding:0px 20px;
        }
        .about-us .aboutdiv .divcontent{
            padding:20px 20px;
            width:1000px;
        }
        .about-us .aboutdiv .divcontent h2{
            padding:20px 0px;
            font-size:40px;
            color:orange;
        }
        .about-us .aboutdiv .divcontent p{
            line-height:2rem;
            font-size:20px;
        }
        .about-us .aboutdiv .divcontent ul {
            margin:20px 0px;
        }
        .about-us .aboutdiv .divcontent ul li{
            line-height:2rem;
            font-size:20px;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <section class="about">
        <div class="about-us">
            <div>
                <h1>About Us</h1>
            </div>
            <div class="aboutdiv">
                <div class="div1image">
                    <img src="assets\event4.jpg" alt="">
                </div>
                <div class="divcontent">
                    <h2>Our Store</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus fuga assumenda id animi? Fugiat, saepe. Praesentium ullam laudantium ducimus, placeat sed repudiandae odio nihil iusto perspiciatis unde voluptas! Impedit, iure enim voluptatibus quo exercitationem animi cupiditate ut expedita alias eaque!</p>
                    <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                    </ul>
                </div>
            </div>
            <div class="aboutdiv">
                <div class="divcontent">
                    <h2>Our Store</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus fuga assumenda id animi? Fugiat, saepe. Praesentium ullam laudantium ducimus, placeat sed repudiandae odio nihil iusto perspiciatis unde voluptas! Impedit, iure enim voluptatibus quo exercitationem animi cupiditate ut expedita alias eaque!</p>
                    <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                    </ul>
                </div>
                <div class="div2image">
                    <img src="assets\event4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
    <?php include("logout.php"); ?>
    

</body>
</html>