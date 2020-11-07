<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/jquery-confirm.min.css">
</head>
<body>

<div class="login_signup" id="login">
        <a href="loginform.php" style="text-decoration: none; margin-left:2rem; margin-top:5rem; text-size: 4px; text-transform: uppercase; color:white; height: 5rem; background-color:blue; ">Login</a> Or
		<a href="signupform.php?id=NaCRRI-signupform12344331" style="text-decoration: none; text-transform: uppercase; color:white; margin-top:5rem; background-color:magenta; ">Signup</a>
		

</div>
<?php
include("logo.php");
?>
  
    
<div class="contact-subs">
        <div class="contact" id ="contact">
            <h2>Contact Us</h2>
           
                <input type="text" name="contactusname" id="contactusname" placeholder="Your name" size="55%" height="60px"><br><br>
                <input type="text" name="contactusemail" id="contactusemail" placeholder="Your E-mail" size="55%"><br><br>
                <textarea placeholder=" Write Your Message Here"  id="contactusmessage" cols="10" rows="30" name="message"></textarea><br>
                <button type="submit" id="contactusbtn" name="contactusbtn">Send Message</button><br><br>
                
        
        </div>
        <div class="subscribe">
            <h3>Subscribe Now </h3>
            
                <input type="email" name="subscribeemail" id="subscribeemail" placeholder=" Enter Your Email here" size="55%">
                <button type="submit" id="subscribebtn" name="subscribebtn" style="color:black;">Subscribe</button>
                
                <i> <h4>We will be sending timely updates to subscribed users to their email addresses </h4> </i>
            
        </div>
    </div>




<div class="copyright">
        <p>&copy Copyright Reserved | NaCRRI | <?php echo date("Y");?> </p>
        <p>Namulonge, Gayaza-Zirobwe Road</p>
        <p>P.O. BOX 7084 Kampala. Tel: +256414573016</p>
	</div>



<script src="script/jquery-3.4.1.min.js"></script>
<script src="sscript/main.js"></script>
<script src="script/react.js"></script>
<script src="script/jquery-confirm.min.js"></script>

<script>
$(document).ready(function(){

    

  
$("#subscribebtn").click(function(){
    //var name=$("#name").val();
    var subscribeemail=$("#subscribeemail").val();
    $.ajax({
        url:'indexscript.php',
        method:'POST',
        data:{
            //name:name,
            subscribeemail:subscribeemail
        },
       success:function(data){
           alert(data);
       }
    });

    
});


$("#contactusbtn").click(function(){
    var contactusname=$("#contactusname").val();
    var contactusemail=$("#contactusemail").val();
    var contactusmessage=$("#contactusmessage").val();

    $.ajax({
        url:'usermessage.php',
        method:'POST',
        data:{
            contactusname:contactusname,
            contactusemail:contactusemail,
            contactusmessage:contactusmessage
        },
       success:function(data){
           alert(data);
       }
    });
});


});


/*

function validatecontactForm(){
var name = document.forms["contact"]["name"].value;
var email = document.forms["contact"]["contactemail"].value;
var message = document.forms["contact"]["message"].value;

if(name == "" || email=="" || message==""){
alert("Fill in all the required fields please.....!!!");
return false;
}else{
alert("Your message has been sent succsessfully and we'll respond to you shortly......!!!");
window.location.assign("index.php");
}
}
*/



</script>





</body>
</html>