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
    <link rel="stylesheet" href="css/book.css">
    <style>
        body{
            /* overflow-x:hidden; */
        }
    .bookevent{
    display: flex;
    flex-direction: row;
    /* flex-wrap:wrap; */
    margin:50px 100px;
    background:whitesmoke;
}
.bookevent input{
    height:30px;
    background:transparent;
    padding:10px;
    background:white;
}
.bookevent .image img{
    height: 800px;
    width: 900px;
}
.formdiv .event-date {
    display:flex;
    justify-content:space-around;
    align-items:center;
    margin:20px 30px;
    background:orange;
    padding:20px 0px;
}

.formdiv{
    margin:0px 20px;
}
.inputs{
    display:grid;
    grid-template-columns:auto;
    padding:0px 20px;
}
.inputs div{
    display:flex;
    flex-direction:row;
    /* justify-content:space-between; */
    margin:10px 0px;
}
.inputs .eventname{
    margin:10px 0px;
    height:30px;
    padding:5px 10px;
    margin:0px 10px;
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
}
.inputs div input{
    width: 100%;
    height:30px;
    margin:0px 10px;
    padding:5px 10px;
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
}
.organize-setup{
    display:flex;
    flex-direction:row;
    align-items:center;
}
.organize-setup div input{
    height:20px;
     outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
}
.organize-setup .organization {
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    margin-left:10px;
}
.organize-setup .organization h2{
    margin:10px 0px;
}
.organize-setup .organization label{
    display:flex;
    flex-direction:row;
    align-items:flex-start;

}
.organize-setup .setup{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    justify-content:space-around;
    margin-left:100px;
}
.organize-setup .setup h2{
    margin:10px 0px;
}
.organize-setup .setup label{
    display:flex;

}
.cdetails{
    margin:0px 10px;
}
.cdetails div{
    display:grid;
    grid-template-columns:auto auto;
    /* width: 100%; */
    margin:10px 10px;
}
.cdetails h2{
    text-align:center;
    background:orange;
    padding:10px 0px;
    margin:0px 20px;
}
.cdetails div input{
    margin:0px 10px;
    padding:0px 10px;
    height:30px;
    margin:0px 10px;
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
}
.cdetails .textarea{
    width: 95%;
    height:30px;
    /* padding:0px 10px; */
    margin-left:20px;
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
}
.payment-div{
    margin:20px 30px;
    /* display:flex; */
    /* flex-direction:column; */
}
.payment-div h2{
    text-align:center;
    background:orange;
    padding:10px 0px;
}
.payment-div div{
    display:flex;
    justify-content:space-evenly;
    align-items:center;
    margin:20px 0px;
}
.payment-div div label{
    /* width: 300px; */
    display:flex;
    align-items:center;
}
.payment-div div label input{
    margin:0px 10px;
    height:10px;
}
.payment-div div label p{
    margin-left:10px;
}
.payment-div div #formbtn{
    padding:5px 20px;
    border:none;
    font-size:20px;
    letter-spacing:2px;
    background:green;
    font-weight:600;
    color:white;
    transition:0.3s all ease;
}
.payment-div div #formbtn:hover{
    border:0.2px solid black;
    background:white;

    color:green;

}

    </style>
</head>
<body>
    <?php include("header.php");?>

    <section class="bookevent">
        <div class="image">
            <img src="assets\event6.jpg" alt="">
        </div>
        <div class="formdiv">
            <form action="bookingphp.php" method="post">
                <div class="event-date">
                   <h1>BOOK YOUR EVENT</h1>
                </div>
                <div class="inputs">
                    <input type="text" class="eventname" name="event_name" placeholder="Event Name">
                    <div>
                    <input type="text" name="event_date" placeholder="Event Date" onfocusin="(this.type='date')" onblur="(this.type='text')">
                    <input type="number" name="no_of_peoples" placeholder="No. of Peoples">
                    </div>
                    <div>
                    <input type="text" name="starting_time" placeholder="Starting time" onfocusin="(this.type='datetime-local')"  onblur="(this.type='text')">
                    <input type="text" name="finishing_time"  placeholder="Finishing Time" onfocusin="(this.type='datetime-local')" onblur="(this.type='text')">
                    </div>
                    <div class="organize-setup">
                    <div class="organization">
                        <h2>organization</h2>
                        <div>
                        <label for="gc">
                        <input type="checkbox" name="organization" id="gc" disabled>
                        Government/Company
                        </label>
                        </div>
                        <div>
                        <label for="gc">
                        <input type="checkbox" id="gc" disabled>
                        Private
                        </label>
                        </div>
                    </div>
                    <div class="setup">
                    <h2>Set up</h2>
                    <div>
                        <label for="theatre">
                        <input type="checkbox" id="theatre" disabled>
                        Theatre
                        </label>
                        <label for="cocktail">
                        <input type="checkbox" id="cocktail" disabled>
                        Cocktail
                        </label>
                    </div>
                    <div>
                        <label for="boardroom">
                        <input type="checkbox" id="boardroom" disabled>
                        Boardroom
                        </label>
                        <label for="classroom">
                        <input type="checkbox" id="classroom" disabled>
                        Classroom
                        </label>
                    </div>
                    </div>
                    </div>
                </div>
                <!-- contact details -->
                 <div class="cdetails">
                    <h2>Contact Details</h2>
                    <div>
                    <input type="text" name="username" placeholder="Name">
                    <input type="phone" name="phone" placeholder="Phone">
                    </div>
                    <div>
                    <input type="text" name="company_name" placeholder="Company Name" disabled>
                    <input type="email" placeholder="Email">
                    </div>
                    <input type="text" name="address" class="textarea" placeholder="Address">
                    <div>
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="state" placeholder="State">
                    </div>
                 </div>
                <!-- contact details -->
                 <!-- payment details -->
                  <div class="payment-div">
                    <h2>Paytement Details</h2>
                    <div>
                    <label for="cash" >
                        <input type="checkbox" id="cash" disabled>
                        Cash
                    </label>
                    <label for="credit">
                        <input type="checkbox" id="credit" disabled>
                        Credit/Debitcard
                    </label>
                    <label for="Cheque">
                        <input type="checkbox" id="cheque" disabled>
                        Cheque
                    </label>
                    </div>
                    <div class="auth">
                    <label for="authorize">
                        <input type="checkbox" id="authorize" disabled>
                        <p>I authorized the debit card to be charged the Rs.120 non refundable deposit, and the outstanding amount for my event.
                         </p>
                    </label>
                    <button type="submit" name="submit" id="formbtn">Submit</button>
                    </div>
                  </div>
                 <!-- payment details -->

            </form>
        </div>
    </section>
    


    <?php include("footer.php");?>
    <?php include("logout.php"); ?>

</body>
</html>