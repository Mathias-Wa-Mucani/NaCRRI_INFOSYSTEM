<?php
require("db_connection.php");

//$contactusname = $_POST['contactusname'];
//$contactusemail = $_POST['contactusemail'];
//$contactusmessage = $_POST['contactusmessage'];

$subscribeemail = $_POST['subscribeemail'];

date_default_timezone_set("Africa/Kampala");
$userSubscribeDate = date("D, d/M/Y h:i:sa");

$check=mysqli_query($connect, "select * from subscriptions where emailaddress='$subscribeemail' ");
$checkrows=mysqli_num_rows($check);
if ($checkrows>0){
        
    echo "A user with this email address already subscribed.....!!";
        
}else{
    if($subscribeemail!=""){
        $sql="INSERT INTO `subscriptions` (`emailaddress`) VALUES ('$subscribeemail')";

        if ($connect->query($sql) === TRUE) {
            echo "Subscription successful, we'll be sending timely updates to ".$subscribeemail." keep checking your inbox";

        $email_subject = 'New User Subscription';
        $email_from = 'NaCRRIInfosystem.000webhostapp.com';
        $email_body = $userSubscribeDate."\n"."Email From: ".$email_from."\n"."User Subscription Email: ".$subscribeemail;
        $to = 'mathiaswamucani.mw@gmail.com' ;
        $headers = "From: ".$subscribeemail;
        mail($to, $email_subject, $email_body, $headers);

        }
        else 
        {
            echo "failed";
        }
    }

    else{
        echo "The email field is empty....!!!";
    }
}
/*
if($contactusname=="" || $contactusemail=="" || $contactusmessage==""){
    echo "Fill in all the required fields....!!!";
}else{
    $sql="INSERT INTO `usermessages` ('username', `emailaddress`, 'messages') VALUES ('$contactusname', '$contactusemail', '$contactusmessage')";

    if ($connect->query($sql) === TRUE) {
        echo "Message sent successfully, we'll send you a reply to ".$contactusemail;
    }
    else 
    {
        echo "failed";
    }
}


*/


?>