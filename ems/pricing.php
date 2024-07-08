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
        .priceandservices{
            margin:0px 0px;
            background:whitesmoke;
            padding:50px 200px;
        }
        .priceandservices{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .priceandservices h1{
           font-size:40px;
           padding:20px 0px;
        }
        .priceandservices .cards{
            display:flex;
            flex-direction:row;
            margin:10px 0px;
            flex-wrap:wrap;
            justify-content:center;
            box-shadow:0px 0px 10px 0px grey;

        }
        .priceandservices .cards .pcard{ 
            margin:50px 20px;
            border:0.3px solid grey; 
            padding:20px 30px;
            border-radius:8px;
            box-shadow:0px 10px 10px 0px grey;
            transition:0.3s all ease;
        }
        .priceandservices .cards .pcard:hover{
            transform:scale(1.05);
        } 

        .priceandservices .cards .pcard h2{
           padding:5px 0px;
        }
        .priceandservices .cards .pcard h3{
           padding:5px 0px;
        }
        .priceandservices .cards .pcard ul{
           padding:10px 0px;
        }
        .priceandservices .cards .pcard ul li{
           padding:5px 0px;
           list-style: circle;
           font-size:20px;
        }
        .priceandservices .cards .pcard button{
           padding:10px 30px;
           letter-spacing:2px;
           list-style: square;
           margin:20px 0px;
           outline:none;
           color:white;
           font-weight:600;
           border:0.3px solid grey;
           background:orange;
           transition:all 0.3s ease;
        }
        .priceandservices .cards .pcard button:hover{
            color:orange;
            background:white;
            border:0.1px solid orange;
        }
        
    </style>
</head>
<body>
<?php include("header.php"); ?>

<section>
    <div class="priceandservices">
        <h1>Prices & Services</h1>
        <div class="cards">
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        <div class="pcard">
            <form action="booking.php">
            <h2>Offical Party</h2>
            <h3>Rs.17999</h3>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Lorem ipsum </li>
                <li>Lorem ipsum  Lorem, ipsum dolor.</li>
                <li>Lorem ipsum  lorem</li>
                <li>Lorem ipsum  loremi ipsum</li>
                <li>Lorem ipsum  loremi ipsum</li>
            </ul>
            <button type="submit">BOOK EVENT</button>
            </form>
        </div>
        </div>
</div>
</section>
<?php include("footer.php"); ?>
<?php include("logout.php"); ?>

</body>
</html>