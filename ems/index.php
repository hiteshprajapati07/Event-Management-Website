<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />    
    <style>
        /* hero section starts */
        section#heroimage{
    background: linear-gradient(rgba(255,255,255,0),rgba(255,255,255,0.5)),url('assets/hero3.webp');
    /* background:url('assets/hero3.webp'); */
    width: 100%;
            height: 95vh;
            background-size: cover;
            position: relative;
            /* display:flex; */
            /* align-items:center; */
            /* justify-content:center; */
            text-align:center;
            overflow-x:hidden;
        }
        .hero-content{
            display:flex;
            flex-direction:column;            
            position:relative;
            top:200px;
        }
        .hero-content h2{
            font-size:90px;
            /* color:white; */
        }
        .hero-content h1{
            font-size:110px;
        }
        .hero-content p{
            font-size:20px;
            letter-spacing:1px;
        }
        .hero-content .hero-content-button{
            margin:50px 0px 0px 0px;
        }
        .hero-content .hero-content-button a{
            margin:0px 20px;
            letter-spacing:2px;
            border:1px solid black;
            padding:10px 30px;
            font-size:20px;
            font-weight:600;
            background:orange;
            color:white;
        }
        .hero-content .hero-content-button a.getstart{
            background:transparent;
            color:black;
            transition:0.3s all ease;
        }
        .hero-content .hero-content-button a.aboutus:hover{
            background:white;
            transition:.3s ease all;
            color:black;
            transition:0.3s all ease;
        }
        .hero-content .hero-content-button a.getstart:hover{
            background:white;
        }
        /* hero section ends */

        /* recent events section starts */

.btn{
   /* margin-top: 1rem; */
   display: inline-block;
   font-size: 2rem;
   color: #000;
   background: #eee;
   border-radius: none;
   cursor: pointer;
   padding: 1.5rem 4rem;
   border: 1px solid #000;
   box-shadow: .5rem .5rem 0 rgb(29, 27, 27);

}
.btn:hover{
    background: #4682b4;
    color: #fff;
    letter-spacing: .1rem;
}
.home h1{
    text-align:center;
    font-size:40px;
    padding-top:100px;
}


.home .home-slider .swiper-slide {
    overflow: hidden;
    margin-top:200px;
    background-size: contain;
    background-position:center;
    width: 50%;
    height: 50%;
}

.home .home-slider .swiper-slide img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-radius: none;
    border: 2px solid #4682b4;
}

            
        /* recent events section ends */

  
        .next-event{
            display:flex;
            flex-direction:column;
            margin:10px 100px;
        }
        .next-event .next1{
            display:flex;
            flex-direction:row;
        }
        .next-event .next1 div img{
            width: 100%;
        }
        .next-event .next1 .next1-content{
            display:flex;
            flex-direction:column;
            padding-left:20px;
            text-align:center;
            align-items:center;
            justify-content:center;
        }
        .next-event .next1 .next1-content h1{
            font-size:30px;
        }
        .next-event .next1 .next1-content p{
            font-size:20px;
            width:100%;
            line-height:2rem;
            margin-top:20px;
            text-align:center;
        }
        .next-event .next2{
            display:flex;
            flex-direction:row;
        }

        .next-event .next2{
            display:flex;
            flex-direction:row;
        }
        .next-event .next2 div img{
            /* width: 100%; */
            height:700px;
        }
        .next-event .next2 .next2-content{
            display:flex;
            flex-direction:column;
            padding-right:20px;
            text-align:center;
            align-items:center;
            justify-content:center;
        }
        .next-event .next2 .next2-content h1{
            font-size:30px;
        }
        .next-event .next2 .next2-content p{
            font-size:20px;
            width:100%;
            line-height:2rem;
            margin-top:20px;
            text-align:center;
        }
        .next-event .next2{
            display:flex;
            flex-direction:row;
        }
        #clientreviews h1{
            text-align:center;
            font-size:35px;
            /* color:orange; */
            letter-spacing:1px;
            padding-bottom:10px;
            /* border-bottom:2px solid black; */
            margin:0px auto;
        }
        #clientreviews{
            margin:50px 200px;
            display:flex;
            flex-direction:column;
            justify-content:space-around;
        }
        #clientreviews .review{
            display:flex;
            flex-direction:row;
            margin:50px 0px;
            /* border-bottom:1px solid black; */
            box-shadow:0px 5px 2px 1px whitesmoke;
            transition:all .3s ease;
        }
        #clientreviews .review:hover{
            transform:scale(1.02);
        }
        #clientreviews .review .clientimage img{
            width: 300px;
            height:200px;
            border-radius:5px;
        }
        #clientreviews .review  .clientcontent{
            display:flex;
            width: 100%;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        #clientreviews .review  .clientcontent p{
            margin:10px 0px;
            font-size:18px;
        }
    </style>
</head>
<body>

    <?php 
    include("header.php");
    ?>

    <!-- hero-section-starts -->
    <section id="heroimage">
        <!-- <img src="assets/eventabroad2.jpg" alt=""> -->
        <div class="hero-content">
            <h2>One Stop</h2>
            <h1>Event Planner</h1>
            <p>EVERY EVENT SHOULD BE PERFECT</p>
            <div class="hero-content-button"> 
                <a href="about.php" class="aboutus">ABOUT US</a>
                <a href="booking.php" class="getstart">GET STARTED</a>
            </div>
        </div>
    </section>
    <!-- hero-section -->

    <!-- ---------------------------RECENT EVENTS------------------------------- -->


    <section class="home">
        <h1>Recent Events</h1>
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets\next2.webp" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets\event1.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets\event2.webp" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets\event3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets\event6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/event4.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- ---------------------------RECENT EVENTS------------------------------- -->

    
    <section>
        <div class="next-event">
            <div class="next1">
                <div >
                    <img src="assets\next1.jpg" alt="">
                </div>
                <div class="next1-content">
                    <h1>CELEBRATE YOUR NEXT EVENT WITH US</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptate ad, hic veritatis exercitationem eum qui excepturi quisquam quos cupiditate recusandae facilis a porro suscipit? Omnis, voluptatem. Sed, in nemo? Iste eligendi cum obcaecati natus odio, aut incidunt non illo tenetur rerum officia, reprehenderit eum vel, a tempora hic repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sit ipsa iusto, iure dolorum modi excepturi accusamus reprehenderit, a, consequuntur quae dolor. Eveniet et fugiat minus dolorum vitae ipsa iure?</p>
                </div>
            </div>
            <div class="next2">
                <div class="next2-content">
                <h1>CELEBRATE YOUR NEXT EVENT WITH US</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est voluptate ad, hic veritatis exercitationem eum qui excepturi quisquam quos cupiditate recusandae facilis a porro suscipit? Omnis, voluptatem. Sed, in nemo? Iste eligendi cum obcaecati natus odio, aut incidunt non illo tenetur rerum officia, reprehenderit eum vel, a tempora hic repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sit ipsa iusto, iure dolorum modi excepturi accusamus reprehenderit, a, consequuntur quae dolor. Eveniet et fugiat minus dolorum vitae ipsa iure?</p>
                </div>
                <div>
                    <img src="assets\next2.webp" alt="">
                </div>                    
            </div>
        </div>
    </section>
<!-- client review section starts -->
    <section id="clientreviews">
        <h1>Client Review</h1>
        <div class="client1review review">
            <div class="clientimage">
                <img src="assets/client1.jpg" alt="">
            </div>
            <div class="clientcontent">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor tempore sapiente maiores modi labore sit consequuntur sequi laudantium dolorem.</p>
                <p><b>Mark Burch | Burch & Associates</b></p>
            </div>
        </div>
        <div class="client2review review">
        <div class="clientimage">
            <img src="assets/client2.jpeg" alt="">
        </div>
        <div class="clientcontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor tempore sapiente maiores modi labore sit consequuntur sequi laudantium dolorem.</p>
        <p><b>James Lewandowski DMP, Owner | Mid-Nebraska Foot Clinic</b></p>
        </div>
        </div>
    </section>
    <!-- client review section starts -->



    <!-- footer section starts -->
     <?php
     include("footer.php");
     ?>
    <!-- footer section ends -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>var swiper = new Swiper(".home-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 10,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true,
    },
    loop:true,
    autoplay:{
        delay: 3000,
        disableOnInteraction:false,
    }
  });</script>

  
<?php include("logout.php"); ?>

</body>
</html>
