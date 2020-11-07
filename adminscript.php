<?php
session_start();
require("db_connection.php");
$content = mysqli_real_escape_string($connect, $_POST['content']);
$cropcategory = mysqli_real_escape_string($connect,$_POST['cropcategory']);
$submitcontent = mysqli_real_escape_string($connect,$_POST['submitcontent']);

date_default_timezone_set("Africa/Kampala");
$submissiondate = date("h:i:sa, d/M/Y");
$Adminusername = $_SESSION['Adminusername'];


if($cropcategory=="Maize"){
    $sql="INSERT IGNORE INTO cropsresearch (maize, date, AdminName) VALUES('$content', '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}
elseif($cropcategory=="Cassava"){
    $sql="INSERT IGNORE INTO cropsresearch (cassava, date, AdminName) VALUES('$content',  '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}
elseif($cropcategory=="Beans"){
    $sql="INSERT IGNORE INTO cropsresearch (beans, date, AdminName) VALUES('$content', '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}
elseif($cropcategory=="Rice"){
    $sql="INSERT IGNORE INTO cropsresearch (rice, date, AdminName) VALUES('$content',  '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}
elseif($cropcategory=="Oil Palm"){
    $sql="INSERT IGNORE INTO cropsresearch (oilpalm, date, AdminName) VALUES('$content',  '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}
else{
    $sql="INSERT IGNORE INTO cropsresearch (potatoes, date, AdminName) VALUES('$content',  '$submissiondate', '$Adminusername')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    header("Location: adminpanel.php");
}




?>