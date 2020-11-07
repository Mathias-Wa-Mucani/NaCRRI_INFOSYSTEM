<?php
require("db_connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];



if( $name!="" && $email!="" && $feedback!=""){

$sql="INSERT IGNORE INTO userqueries_feedbackandsubscriptions (username, emailaddress, feedbacks) VALUES('$name', '$email', '$feedback')";
    $result=mysqli_query($connect, $sql) or die("Error connecting to the database.");
    //header("Location: ../homepage.php");
    echo "Feedback sent successfully......";
}else{
    //echo "An error occurred...!!";
}
/*
    if ($connect->query($sql) === TRUE) {
        
    }
    else 
    {
        echo "failed";
    }
*/