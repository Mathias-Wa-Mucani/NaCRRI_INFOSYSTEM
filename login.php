<?php
session_start();

require("db_connection.php");

$name=$_POST['name'];
$pass=$_POST['pass'];


$Adminname=$_POST['name'];
$Adminpass=$_POST['pass'];


//$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//$url = $_SERVER['HTTP_REFERER'];
//$_SESSION['url'] = $url;

$checkAdmin=mysqli_query($connect, "select * from Admins where Adminname='$Adminname' and Adminpassword='$Adminpass' ");
$checkrowsAdmin=mysqli_num_rows($checkAdmin);

//$checkUser=mysqli_query($connect, "select * from usersignup where username='$name'  ");
//$checkrowsUser=mysqli_num_rows($checkUser);

$checkUser= "SELECT * FROM usersignup where username='$name'  ";
$checkrowsUser=$connect->query($checkUser);


if(isset($_POST['btnlogin'])){

if ($checkrowsAdmin>0){
    
    $_SESSION['Adminusername']=$Adminname;
    header("Location: adminpanel.php");

}else if($checkrowsUser->num_rows>0){
    //if ($checkrows->num_rows>0){
        while($row = $checkrowsUser->fetch_assoc()){
        echo $row['password'];
        if(password_verify($pass, $row['password'] )){
            $_SESSION['username']=$name;
            header("Location: homepage.php");
        }else{
        
        //echo "Passwords have not matched....";
        echo"<script language='javascript'>";
        echo 'alert("Passwords have not matched, please enter the correct password...!!!")';
        echo"</script>";
        header("refresh: .0001; loginform.php");    }
}
}else{
        echo"<script language='javascript'>";
        echo 'alert("Invalid login details or user does not exist...!!!")';
        echo"</script>";
        header("refresh: .0001; loginform.php");
}
}
 





 



?>