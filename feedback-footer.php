<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaCRRI_Feedback</title>
    <style>
    
    .feedback textarea{
            width: 40%;
            border: 1px solid cyan;
            height: 200px;
            padding-left:1rem;
            font-size:1.2rem;
            text-indent:1rem;
        }

        .feedback input{
            width: 30%;
            height:2rem;
            padding-left:1rem;
            font-size:1.2rem;
            text-indent:1rem;
        }

        .feedback{
            padding-left: 6%;
            background-color:rgb(179, 169, 70);
            padding-top:4rem;
            text-align:center;
        }

        .feedback button{
            background-color: #00e5ff;
            
        }

        .copyright{
            width: 100%;
            padding:10px;
            border:1px solid #eee;
            text-align: center;
            text-transform: initial;
            background-color: white;
    
        }

        @media screen and (max-width:600px){
            .feedback input{
                width:16rem;
            }
            .feedback textarea{
                width:18rem;
            }
        }
    
    </style>
</head>
<body>
<?php
//include("logo.php");
?>
<div class="feedback" id ="feedback">
	<h2>Feedback About The Crop Researches</h2>
	<form name="feedback"  action="feedbackscript.php"  method="post" onsubmit="return validateFeedbackForm()">
		<input type="text" name="name" placeholder="Your name" id="name"><br><br>
		<input type="email" name="email" placeholder="Your E-mail" id="email" ><br><br>
		<input type="textarea" name="subject" placeholder="Your Subject"><br><br>
        <textarea placeholder=" Write Your Feedback Here"  name="feedback" id="feedback"></textarea><br><br>
        <button id="sendFeedback" name="sendFeedback">Send Feedback</button><br><br>
        
		
	</form>
	</div>

    <div class="copyright">
		<p>&copy Copyright Reserved | NaCRRI | <?php echo date("y")."20";?> </p>
	</div>

<script src="script/jquery-3.4.1.min.js"></script>
<script src="script/main.js"></script>

<script>
function validateFeedbackForm(){

	var username = document.forms["feedback"]["name"].value;
    var email = document.forms["feedback"]["email"].value;
    var feedback = document.forms["feedback"]["feedback"].value;

	if(username=="" && email=="" && feedback==""){
        alert("Username, Email Address and feedback are missing.....!!!");
		return false;
    } else if( username=="" ){
		alert("Please enter your username......!!!");
		return false;
    }else if( email=="" ){
		alert("Please enter your email address......!!!");
		return false;
	}else if (feedback==""){
        alert("Please enter the feedback you intend to send.....!!!");
		return false;
    }
    else{
		alert("Your feedback has been sent successful and you'll be getting timely updates via email......!!!");
        //var x = location.href;
		//location.reload();
	}
}


</script>
</body>
</html>