

<?php
session_start();

require("db_connection.php");
$username=$_POST['name'];
$password=$_POST['pass'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$passconfm=$_POST['passconfm'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];

date_default_timezone_set("Africa/Kampala");
$signupDate = date("D, d/M/Y h:i:sa");
//$signupDate = date("h:i:sa, d/M/Y");

$check=mysqli_query($connect, "select * from usersignup where username='$username' or password='$password' ");
$checkrows=mysqli_num_rows($check);
if ($checkrows>0){
    
    echo "<script language='javascript'>";
    echo "alert('User already exists with this username....!!')";
    echo "</script>";
    header("refresh: .0001; signupform.php");
    exit;
    
    
}else{
    if ($password==$passconfm) {
        $passconfm = $password;
        //$signupDate = date("h:i:sa, d/M/Y");
        //$signupDate = date("h:i:sa, d/M/Y");
        $sql="INSERT IGNORE INTO usersignup (username, telephone, emailaddress, password, signupDate ) VALUES('$username',  '$telephone', '$email',  '$hashed_password', '$signupDate')";
        $result=mysqli_query($connect, $sql) or die("Error querrying database.");

        $email_subject = 'New User Signup';
        $email_from = 'NaCRRIInfosystem.000webhostapp.com';
        $email_body = $signupDate."\n"."User Name: ".$username."\n"."User Telephone Number: ".$telephone."\n"."Email From: ".$email_from."\n"."User Email: ".$email."\n"."User Message: ";
        $to = 'mathiaswamucani.mw@gmail.com' ;
        $headers = "From: ".$email;
        mail($to, $email_subject, $email_body, $headers);


        header("Location: loginform.php");

    } else {
        echo"<script language='javascript'>";
        echo "alert('Passwords do not match')";
        echo "</script>";
        
        header("refresh: .0001; signupform.php");
        exit;
    }
mysqli_close($connect);
}





?>