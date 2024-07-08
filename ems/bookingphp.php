<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "eventmanagement";

$conn = mysqli_connect($server, $username, $password, $db_name);
// if($conn)
// {
//     echo "connected";
// }
// else{
//     echo "not connected";
// }


    if(isset($_POST['submit']))
{
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $no_of_peoples = $_POST['no_of_peoples'];
    $starting_time = $_POST['starting_time'];
    $finishing_time = $_POST['finishing_time'];

    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO `event`(`event_name`, `event_date`, `no_of_peoples`, `starting_time`, `finishing_time`, `organization`, `setup`, `username`, `phone`, `company_name`, `email`, `address`, `city`, `state`) VALUES ('$event_name','$event_date','$no_of_peoples','$starting_time','$finishing_time','NULL','NULL','$name','$phone','NULL','$email','$address','$city','$state')";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo "<script>
        alert('Event Scheduled');
        window.location.href='index.php';
    </script>";

    }
    else
    {
        echo "There is a problem";
    }
}



?>