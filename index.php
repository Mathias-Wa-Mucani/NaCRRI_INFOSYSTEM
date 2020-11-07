<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaCRRI_CropResearchInfoSystem</title>
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
    <div class="home">
        <div class="menu">
			<a href="homepage.php" style="color:white;  ">INFO ABOUT CROPS |</a>
            		
			<a href="contact-us.php">CONTACT US |</a>

            <a href="about-us.php">ABOUT US </a>
        </div>
    </div>

    <div class="bodyimage">
    <div class="indexlandingtext">
    <h2>Welcome to the <b> <i> National Crops Resources Research Institute (NaCRRI) Information Dissemination System<i></b> </h2>
    <h3>This is the home of the best and leading Agricultural researches in the country because we have a very committed and dedicated team that keeps on diving into more and more useful researches to the country.</h3>

    </div>

    <div class="root" id="root"></div>

    <div class="overview">
        <h2 style="text-decoration: underline;">History and Overview</h2>
        <i><b>The National Crops Resources Research Institute (NaCRRI)</b></i> is one of the Agricultural Research istitutes under the co-ordination of the <b>National Agricultural Research Organization (NARO)</b>
        <P>NaCRRI's mandate is to conduct research and knowledge generation on crops of strategic national importance including; cassava, sweet potatoes, beans, maize, rice, oil palm,  and horticultural crops.</P> <hr>
    </div>

    <div class="vission" id="vision">
        <h2 style="text-decoration: underline;">Vission</h2>
       <h4><p>A centre of excellence for all aspects of crop research for accelerated development.</p></h4><hr>
    </div>

    <div class="mission">
        <h2 style="text-decoration: underline;"> Mission  </h2>
        <h4><p>To generate, develop and disseminate appropriate crop technologies , methods and knowledge while conserving and crop genetic resources.</p></h4><hr>
    </div>


   <div class="services" >
       <h2 style="text-decoration: underline;">Our services </h2>
        <ul>
        <li>Germ Plasm promotion</li>
        <li>Training</li>
        <li>Promotion of research methods</li>
        <li>Advisory services</li>
        <li>Information dissemination
        <li>Policy (Contribution of evidence for issues of policy making)</li></li>
        </ul> <hr>
   </div>
    
   

   </div>

   <div class="contact-subs">
        <div class="contact" id ="contact">
            
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
<script src="script/main.js"></script>
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