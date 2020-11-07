


<?php
session_start();
require("db_connection.php");


    $newpassconfm=$_POST['newpassconfm'];
    $newpass=$_POST['newpass'];
    $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);
    $email=$_SESSION['email'];
    if ($newpass==$newpassconfm) {
        $sql= "UPDATE usersignup SET password='$hashed_password' WHERE emailaddress='$email' ";

        if (mysqli_query($connect,$sql)) {
            echo"<script language='javascript'>";
            echo 'alert("Your password has been updated successfully...!!!")';
           echo"</script>";
           echo"Your password has been updated successfully...!!!";
           header("refresh: .0001; loginform.php");
        } else {
            echo"Not upadted";
            mysqli_error($connect);
        }
    } else {
        echo"<script language='javascript'>";
        echo 'alert("Passwords did not match, please try again...!!!")';
       echo"</script>";
       header("refresh: .0001; passreset.html");
    }
    
    
    
    
    
    
    
