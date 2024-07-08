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
    $name = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contactus`(`username`, `email`, `message`) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo "<script>
        alert('Our Team Will contact you SOON!!');
        window.location.href='index.php';
    </script>";

    }
    else
    {
        echo "There is a problem";
    }
}



?>