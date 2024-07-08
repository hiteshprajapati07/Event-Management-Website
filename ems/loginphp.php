<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "eventmanagement";

$conn = mysqli_connect($server, $username, $password, $db_name);
        $username = $_POST['username'];
        $password = $_POST['password'];
            $sql = "select * from users where username = '$username' and password = '$password'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) === 1)
            {
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $username && $row['password'] === $password)
                {
                    session_start();
                    $_SESSION['UserLoginId']=$username;
                    header("location: index.php");

                    // echo "<script>
                    // alert('Welcome $username');
                    // window.location.href='index.php';
                    // </script>";

                }
            }
            else{
                echo "<script>
                    alert('Incorrect Username Or Password');
                    window.location.href='login.php';
                </script>";
            }
?>