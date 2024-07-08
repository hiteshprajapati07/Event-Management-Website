<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/footer.css">
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}
:root{
    --bg-color: #ffffff;
    --main-color:orange;
    --text-color:#000000;
    --other-color:#83868c;
    --second-color:#d9d9d9;
    --orange--:orange;

    --h1-font: 2.5rem;
    --h2-font:2.3rem;
    --p-font:20px;
}

/* footer section starts */
.footer{
    background: whitesmoke;
    margin: 0;
    padding: 30px 40px;
    border-top: 2px solid grey;
}
.footer-main{
    display: flex;
    flex-direction: row;
    /* align-items: center; */
    justify-content: space-around;
}
.footer-main div{
    display: flex;
    flex-direction: column;
}
.footer-main div h2{
    color: black;
}
.footer-main div a{
    padding: 10px 0px;
    color: grey;
    font-size: var(--p-font);
}
.footer-main div a:hover{
    color: var(--main-color);
}
.copyright{
    background:grey;
}
.copyright p{
    font-size:20px;
    padding:20px 0px;
    color:white;
    letter-spacing:2px;
}
/* footer section ends */


    </style>
</head>
<body>
   
     <!-- footer section starts -->
     <section class="footer">
        <div class="footer-main">
            <div class="information">
                <h2>INFORMATION</h2>
                <a href="">FAQ</a>
                <a href="">Terms & Conditions</a>
                <a href="">Return & Refund Policy</a>
                <a href="">About Us</a>
                <a href="">Privacy Policy</a>
            </div>
            <div class="customer">
                <h2>CUSTOMER SERVICE</h2>
                <a href="">Contact Us</a>
                <a href="">Site Map</a>
            </div>
            <div class="extras">
                <h2>Tell A Friend</h2>
                <a href="">Brands</a>
                <a href="">Gift Vouchers</a>
                <a href="">Special Vouchers</a>
                <a href="">Latest Products</a>
                <a href="">Bestseller</a>
                <a href="">Featured Products</a>
            </div>
            <div class="myaccount">
                <h2>My Account</h2>
                <a href="">Order History</a>
                <a href="">Receipt Upload</a>
                <a href="">Wish List</a>
            </div>
        </div>
     </section>
     <div class="copyright">
            <p style="text-align:center;">ALL COPYRIGHT RESERVED BY @[COMPANY-NAME]</p>
    </div>
    <!-- footer section ends -->
</body>
</html>