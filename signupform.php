
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Form</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <?php
include("logo.php");
?>
    <div class="landingtext">
<h1>Welcome to the NaCRRI Crop Research Information Dissemination System</h1>
<h2>Please feel to provide your details for a successful signup with our system</h2>
</div>
<div class="signupform">
          
    <form action="signup.php" method="post">
            
        <label for="username">Username</label>
        <input type="text" name="name" id="name" required placeholder="eg Mathiaswamucani" size="35rem" ;><br><br>

        <label for="password">Password</label>
        <input type="password" name="pass" id="pass" required placeholder="enter password" width: 22rem;><br><br>
        <label for="passconfm">Confirm Password</label>
        <input type="password" name="passconfm" id="passconfm" required placeholder="confirm password" width: 22rem;><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required placeholder="eg mathiaswamucani.mw@gmail.com" size="45rem" ;><br><br>
        
        <label for="">Telephone Number</label>
        <input type="tel" name="telephone" id="telephone" required placeholder="Include zip code eg +2557" size="28rem" ;> <br><br>
        <button>Signup</button> <a href="loginform.php">Already have an account?</a>
    </form>
    
</div>


</body>
</html>






