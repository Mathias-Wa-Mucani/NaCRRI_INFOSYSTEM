<?php
session_start();
require("db_connection.php");
echo'<form action="" method="post">';
echo'<label for="passreset">Input Email Address</label>';
echo'<input type="email" name="passreset" id="passreset" size="65%" required>';
echo'<input type="submit" value="submit" >';
echo'</form>';

if (isset($_POST['passreset'])) {
    $email=$_POST['passreset'];
    $_SESSION['email']=$email;

    $check=mysqli_query($connect, "select * from usersignup where emailaddress='$email'");
    $checkrows=mysqli_num_rows($check);
    if ($checkrows>0){
        header("Location: passreset.html");
     

        }
    else{
       echo"user does not exist";
    }
}



