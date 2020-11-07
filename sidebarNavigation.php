<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/w3.css">
    <style>
    
    .sidebarlinks a{
      display:block;
      padding-left:6rem;  
      color:wheat;   
      font-size:1.8rem;
      font-family:helevitica;
      text-decoration:none;
      border:solid 2px;
      border-color:lightblue;
     
    }
    .sidebarlinks a:hover{
      color:white;
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
      margin-top:4rem;
      margin-left:0rem;
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
  <h1 style="color:blue;">Main Menu</h1>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
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

</body>
</html>