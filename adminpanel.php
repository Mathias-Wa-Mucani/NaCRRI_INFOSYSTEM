<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="style/w3.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="widgEditor/css/widgEditor.css">
    

    <style type="text/css" media="all">
	@import "widgEditor/css/info.css";
	@import "widgEditor/css/main.css";
	@import "widgEditor/css/widgEditor.css";
</style>

<script type="text/javascript" src="widgEditor/scripts/widgEditor.js"></script>
</head>
<body>

<style>
    
    .sidebarlinks a{
      display:block;
      padding-left:6rem;  
      color:wheat;   
      font-size:1.5rem;
      font-family:helevitica;
      text-decoration:none;
      border:solid 2px;
      border-color:lightblue;
     
    }
    .sidebarlinks a:hover{
      color:green;
      font-size:2rem;
      padding-left:2rem;
    }
    .sidebarlinks{
      margin-top:-3.2rem;
      padding-bottom:14rem;
      padding-top:4rem;
      background-color: rgb(157, 148, 176);
      width:23.6rem;
    }
    .mySidebar{
      
      width:5rem;
      height:16rem;
    }
    .container{
      display:none
    }
    .main{
      margin-top:-16rem;
    }
    .menu{
      margin-top:1rem;
      margin-left:1rem;
    }
    #btncrops:hover{
      background-color:rgb(43, 255, 0);
    }
    
    </style>

</head>
<body>
  <div class="mainContent">
<div class="mySidebar">
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">

<button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()" style="margin-left:17rem; width:6rem; margin-top:1rem; background-color: red;">Close &times;</button>
  <div class="sidebarlinks" id="sidebarlinks">

  <div class="loginstatus" id="loginstatus" onload="loginstatus()">
<?php
	session_start();
    
  
  
  //echo $_SESSION['url'];

  //if(!isset($_SESSION['url']) && $_SESSION['username']!=""){
   // header("Location: index.php");
  //}else{
    //header("Location: adminpanel.php");
  //}
        
    if($_SESSION['Adminusername']!=""  ){
      echo "You're logged in as ".$_SESSION['Adminusername'];


    }else{
      header("Location: index.php");
    }
    ?>
    

</div>
<button id="btncrops" name="btncrops" style="border-radius:20px; height:2rem; "><h1 style="color:blue; width:16rem; font-size:1.4rem; margin-top:-.3rem;">View Crop Researches</h1></button>
  
  <div class="cropresearches" id="cropresearches" name="cropresearches" style="display:none;">
  <a href="crops/cassava.php" class="w3-bar-item w3-button">Cassava</a>
  <a href="crops/beans.php" class="w3-bar-item w3-button">Beans</a>
  <a href="crops/maize.php" class="w3-bar-item w3-button">Maize</a>
  <a href="crops/oil_palm.php" class="w3-bar-item w3-button">Oil Palms</a>
  <a href="crops/potatoes.php" class="w3-bar-item w3-button">Potatoes</a>
  <a href="crops/rice.php" class="w3-bar-item w3-button">Rice</a>
  </div>
  <br>
<form action="adminlogout.php" method="post">
		<input type="submit" value="Logout" style="  border-style: solid 2px;
        border-color: red; margin: 1rem; hover:background-color:  rgba(0, 109, 128, 0.815); cursor: pointer;">
</form>

  </div>
</div>
</div>

<div id="main" class="main">

<div class="menu">
<div class="w3-teal" id="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="container">
    
  </div>
  
</div>
</div>


<div class="w3-container">

</div>

</div>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  //document.getElementById("main").style.padding-right = "25%";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

    <div class="fullpage">
    
<?php
include("logo.php");
?>

    <div class="adminlandingtext">
    <h1 style="font-family:helevitica;  font-size:2.4rem;">Welcome to the NaCRRI Admin Dashboard</h1>
    <h3 style="font-family:heleviti; font-size:1.6rem;">This panel provides the Admin the privileges to manage everything on this system</h3>
    </div>

    <div class="adminform">
        <div class="adminfieldset">
        <fieldset>
            <legend></legend>
            <form name="adminform" action="adminscript.php"  onsubmit="return validateForm()" method="post" >
                <label for="">Type in the below text area the research you want to submit</label><br><br>

            <label for="">Choose the crop research category you want this submission to appear under.</label>
            <div class="cropresearches">
            <select name="cropcategory" id="cropcategory" required width="700px">
                <option value="Cassava">Cassava</option>
                <option value="Maize">Maize</option>
                <option value="Rice">Rice</option>
                <option value="Oil Palm">Oil Palm</option>
                <option value="Beans">Beans</option>
                <option value="Sweet Potatoes">Sweet Potatoes</option>
            </select>
            </div>
            <textarea name="content" id="widgEditor" cols="10" rows="2" placeholder="Your logged in username and date will appear at the top of every reseaerch you post..." ></textarea>
            <br>
            <div class="submitcontent">
            <input type="submit" value="Submit the Research content"  style="font-size: 1.2rem; margin-left:20rem; color:blue;" id="submitcontent" name="submitcontent" ><br><br>
            </div>

            <label for="">This is optional...!!</label><br>
            <label for="">Select a file to upload</label>
            <input type="file" name="selectfile" id="selectfile">
            <input type="submit" value="Upload the file" id="fileupload" name="fileupload">
            
            </form>
        </fieldset>
        </div>
    </div>
    </div>

<script src="script/jquery-3.4.1.min.js"></script>
<script src="script/main.js"></script>
<script src="widgEditor/scripts/widgEditor.js"></script>


</body>
</html>