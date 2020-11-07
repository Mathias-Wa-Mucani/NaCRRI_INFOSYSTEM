
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
<?php
include("logo.php");
?>

    <div class="form">
    <form action="login.php" method="post">
    <fieldset>
    <div class="fieldset">
    <legend>Please provide your Login Details here</legend>
</div>
<div class="logininput">
    <label for="username">Username</label>
    <input type="text" name="name" id="name" required placeholder="eg mathiaswamucani" style="width: 20rem; height:1.5rem; font-size: 1.3rem; "><br>
    <label for="password">Password</label>
    <input type="password" name="pass" id="pass" required style="width: 20rem; height:1.5rem; font-size: 1.3rem; "><br>
    <button type="submit" name="btnlogin" id="btnlogin">Login</button> <a href="passresetform.php">Forgot password?</a> <br> <b> <div style="margin-left: 14rem; padding-top:1rem;" class="or">OR</div></b> <br>
    
    <a id="signuplink" href="signupform.php"> <b style="color:rgb(204, 0, 255); font-size: 2rem; text-decoration: underline;  margin-left: 12rem; background-color: rgb(190, 245, 179); "> Signup</b></a><h3 id="signuptext" style="text-decoration: none;">to create an account with us</h3>
</div>


</fieldset>
    </form>
</div>
<?php
session_start();
//$url = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']: '';

?>

</body>
</html>





