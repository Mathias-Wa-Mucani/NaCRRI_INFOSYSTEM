<?php
require("db_connection.php");

$contactusname = mysqli_real_escape_string($connect, $_POST['contactusname']);
$contactusemail = mysqli_real_escape_string($connect, $_POST['contactusemail']);
$contactusmessage = mysqli_real_escape_string($connect, $_POST['contactusmessage']);

date_default_timezone_set("Africa/Kampala");
$messageSentDate = date("D, d/M/Y h:i:sa");

if ($contactusname!="" && $contactusemail!="" && $contactusmessage!="") {
    $sql="INSERT INTO usermessages (username, emailaddress, messages) VALUES ('$contactusname', '$contactusemail', '$contactusmessage')";

        if ($connect->query($sql) === TRUE) {
            echo "Message sent successfully, we'll send an immidiate feeedback to ".$contactusemail." keep checking your inbox";

        $email_subject = 'New User Message';
        $email_from = 'NaCRRIInfosystem.000webhostapp.com';
        $email_body = "Message sent on: ".$messageSentDate."\n"."User Name: ".$contactusname."\n"."Email From: ".$email_from."\n"."User Email: ".$contactusemail."\n"."User Message: ";
        $to = 'mathiaswamucani.mw@gmail.com' ;
        $headers = "From: ".$contactusemail;
        mail($to, $email_subject, $email_body, $headers);

        }
        else 
        {
            echo "Failed to send message....!!!";
        }
    }

    else{
        echo "Please fill in all the required fields....!!!";
    }
    


?>