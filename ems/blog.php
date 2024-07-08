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
        .blog-section{
            margin-bottom:50px;
        }
        .blog-section .bloghero{
            position:relative;
            display:flex;
            align-items:center;
            /* justify-content:center; */
            flex-direction:column;
        }

        .blog-section .bloghero img{
            width: 100%;
            height:90vh;
            background-size:cover;
            background-position:center;
        }
        .blog-section .hero-content{
            position:absolute;
            top:80;
        }
        .blog-section .hero-content h1{
            /* width: 50%; */
            font-size:80px;
            color:white;
        }
        .love-to-host{
            display:flex;
            flex-direction:row;
            justify-content:space-evenly;
            margin:20px 200px;
        }
        .love-to-host img{
            height:50vh;
        }
        .love-to-host div{
            padding:0px 20px;
        }
        .love-to-host .love-content{
            padding:20px 0px;
        }
        .love-to-host .love-content h2{
            font-size:40px;
            letter-spacing:2px;
        }
        .love-to-host .love-content p{
            line-height:2rem;
            font-size:20px;
            padding:20px 0px;
        }
        .love-to-host .love-content button {
            padding:15px 20px;
            background:orange;
            font-size:20px;
            outline:none;
            border:none;
            margin:10px 0px;
            border-radius:8px;
            transition:0.3s all ease;
        }
        .love-to-host .love-content button:hover{
            background:white;
            border:0.1px solid orange;
        }
        .love-to-host .love-content button:hover a{
            color:orange;
        }
        .love-to-host .love-content button a{
            color:white;
        }
        .schedule-event{
            margin:50px 30px;
        }
        .schedule-event h1{
            text-align:center;
            font-size:40px;
            padding:20px 0px;
            letter-spacing:2px;
        }
        .schedule-cards{
            display:flex;
            align-items:center;
            justify-content:center;            
            text-align:center;
        }
        .schedule-cards .card{
            margin:0px 50px;

        }
        .schedule-cards .card .cardimg{
            width: 300px;
        }
        .schedule-cards .card .cardcontent{
            margin:0px 30px;
            padding:20px 40px;
        }
        .schedule-cards .card .cardcontent h2{
            font-size:30px;
            padding:10px 0px;
        }
        .schedule-cards .card .cardcontent p{
            font-size:20px;
            padding:10px 0px;
        }
        .customercard img{
            width:200px;
            border-radius:8px;
        }
        .customercards{
            display:flex;
            flex-direction:row;
            text-align:center;
        }
        .customercards .customercard {
            border:1px solid grey;
            margin:0px 150px;
            padding:20px 0px;
            border-radius:8px;
            box-shadow:5px 5px 10px 0px grey;
        }
        .customercards .customercard div {
            padding:20px 0px;
        }
        .customercards .customercard div h2{
            padding:10px 0px;
        }
        .customercards .customercard div p{
            line-height:2rem;
        }

    </style>
</head>
<body>
    <?php include("header.php")?>

    <section class="blog-section">
        <div class="bloghero">
            <img src="assets\weddingphoto02.jpg" alt="">
            <div class="hero-content">
                <h1>Create Your Next Anniversary Event</h1>
            </div>
        
        </div>
        <div class="love-to-host">
            <div class="loveimage">
                <img src="assets\event4.jpg" alt="">
            </div>
            <div class="love-content">
                <h2>We Love to Host</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quam qui neque nisi velit corrupti, reprehenderit repudiandae explicabo laborum eaque tempore pariatur officia vero, eos corporis cum magni autem, saepe culpa voluptatem provident! Eum doloremque eos quo ut voluptas ullam obcaecati, accusamus officiis quos sed possimus adipisci inventore iure nulla.</p>
                <button><a href="booking.php">Schedule Event</a></button>
            </div>
        </div>


<!-- schedue event -->
        <div class="schedule-event">
            <h1>We Schedule All Types of Events</h1>
            <div class="schedule-cards">
                <div class="schedule-card1 card">
                    <div class="card1mg ">
                        <img src="assets\event1.jpeg" alt="">
                    </div>
                    <div class="cardcontent">
                        <h2>Wedding Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati itaque qui dicta expedita ex rem veniam? Repudiandae veniam dolorem expedita.</p>
                    </div>
                </div>
                <div class="schedule-card2 card">
                    <div class="cardimg">
                        <img src="assets\event1.jpeg" alt="">
                    </div>
                    <div class="cardcontent">
                        <h2>Birthday Party</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati itaque qui dicta expedita ex rem veniam? Repudiandae veniam dolorem expedita.</p>
                    </div>
                </div>
                <div class="schedule-card3 card">
                    <div class="cardimg">
                        <img src="assets\event1.jpeg" alt="">
                    </div>
                    <div class="cardcontent">
                        <h2>Ceremony</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati itaque qui dicta expedita ex rem veniam? Repudiandae veniam dolorem expedita.</p>
                    </div>
                </div>
            </div>
        </div>
<!-- schedue event -->


<div class="customer">
    <div class="customercards">
        <div class="customercard">
            <img src="assets\client1.jpg" alt="">
            <div>
            <h2>Maria Smith</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur unde reiciendis necessitatibus pariatur similique veritatis porro facere ratione eum.</p>
            </div>
        </div>
        <div class="customercard">
            <img src="assets\client1.jpg" alt="">
            <div>
            <h2>Maria Smith</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur unde reiciendis necessitatibus pariatur similique veritatis porro facere ratione eum.</p>
            </div>
        </div>
    </div>
</div>
    </section>

    <?php include("footer.php");?>
    
    <?php include("logout.php"); ?>

</body>
</html>