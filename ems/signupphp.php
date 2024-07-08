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
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];

    $sql = "insert into users values ('$name','$email','$password','$repeatpassword')";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo "You're Signed Up";
        session_start();
        $_SESSION['UserLoginId']=$username;
        header("location: index.php");

    }
    else
    {
        echo "There is a problem";
    }
}
?>