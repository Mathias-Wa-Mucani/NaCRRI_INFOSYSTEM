<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="style/w3.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	

	<style>
    
    .sidebarlinks a{
      display:block;
	  padding-left:1rem; 
	  margin-right:2rem; 
      color:wheat;   
      font-size:1.3rem;
      font-family:helevitica;
      text-decoration:none;
      border:solid 2px;
      border-color:lightblue;
	  z-index:1;
    }
    .sidebarlinks a:hover{
	  color:white;
	  font-size:1.5rem;
	  padding-left:2rem;
	  
    }
    .sidebarlinks{
      margin-top:-4.2rem;
      padding-bottom:14rem;
      padding-top:2rem;
      background-color: rgb(157, 148, 176);
	  width:20rem;
	  height:50rem;
	  z-index:1;
    }
    .mySidebar{
      
      width:5rem;
	  height:16rem;
	  
	  z-index:1;
    }
    .container{
      display:none
    }
    .main{
	  margin-top:-16rem;
	  z-index:1;
    }
    .menunavs{
      margin-top:0rem;
	  margin-left:0rem;
	  width:4rem;
	  z-index:1;
	}
	.dropdown-content a{
		z-index:1;
	}
    
    </style>
		
</head>
<body>
<div class="mainContent">
<div class="mySidebar">
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">

<button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()" style="margin-left:14rem; width:6rem; margin-top:1rem; margin-bottom:1rem; background-color: red;">Close &times;</button>
  <div class="sidebarlinks" id="sidebarlinks">

  <div class="loginstatus" style="display:none; text-align:center; margin-top:2rem; background-color:wheat; width:20rem;" name="loginstatus" id="loginstatus">
  
			<?php
			//
			session_start();
			require("db_connection.php");
			if($_SESSION['username']!=""){

				$sql1 = "SELECT * FROM usersignup where username = '$_SESSION[username]' order by id desc limit 1";
				$result1 = $connect->query($sql1);

				if ($result1->num_rows > 0) {
    // output data of each row
    			while($row = $result1->fetch_assoc()) {
     			$path=$row["profileImage"];
     			$_SESSION['UserprofilePic'] = $path;
	  			//echo "<img src='$path' height='280' width='320' /><br>";
				 //echo $_SESSION['profilePic'];
				 if ($path!='') {
					 //echo "Image found";
				 }else{
					 echo "No profile pic set, please tap add one!";
					 //$path = "<img src='images/icon.png'>";
					 echo $_SESSION['UserprofilePic'];
				 }
    }
} 

				echo "
			<div class='logInpic'>
			
				<button name='btnLogInpic' id='btnLogInpic' style='border: 1px solid magenta; width:8.2rem; height:8.2rem; border-radius:50%;'><img name='logInImage' id='logInImage' src='$path' style='width:8rem; height:8rem;  border-radius:50%; margin-left:-.4rem; margin-top:-.05rem; background-image:url('../images/user.svg');'></button><br>
				<form action='uploadImage.php' method='post' enctype='multipart/form-data'> 
				<input type='file' name='uploadedfile' id='inputfile' value='' style='display:none; ' ><br>
				<input type='submit' value='Upload Profile Pic' id='btnEditPic' name='submit' style='display:none;'><br><br>
				<input type='submit' value='Delete Profile Pic' id='btnDeletePic' name='btnDeletePic' style='display:none; color:red;'>
				</form>
			</div>
			";

				echo "You're logged in as <b style='color:green;' id='logInName'><i>".$_SESSION['username']."</b></i>";

			}
			?>

	</div>
  <h1 style="color:blue; font-size:1rem; margin-top:2rem; margin-left:3rem;">CROP RESEARCH CATEGORY</h1>
  <div class="dropdown" id="dropdown">
		
		<div class="dropdown-content" id="dropdowncontent">
		<ul>
			<div class="active">
			<a href="crops/cassava.php">CASSAVA</a>
			</div>
			<div class="active">
			<a href="crops/maize.php">MAIZE </a>
			</div>
			<div class="active">
			<a href="crops/potatoes.php">SWEET POTATOES </a>
			</div>
			<div class="active">
			<a href="crops/beans.php">BEANS </a>
			</div>
			<div class="active">
			<a href="crops/rice.php">RICE </a>
			</div>
			<div class="active">
			<a href="crops/oil_palm.php">OIL PALM</a>
			</div>
			</ul>
		</div>
		<div class="logout" style="display:none;" id="logout">
	<form action="logout.php" method="post">
		<input type="submit" value="Logout" style="  border-style: solid 2px;
        border-color: red; margin-top: 3rem; z-index:1; hover:background-color:  rgba(0, 109, 128, 0.815); cursor: pointer;">
</form>
</div>
</div>
  </div>
</div>
</div>

<div id="main" class="main">

<div class="menunavs">
<div class="w3-teal" id="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xxxlarge" onclick="w3_open()">&#9776;</button>
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
  //document.getElementById("main").style.z-index = "1";
  document.getElementById("openNav").style.display = 'none';
  
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
$(document).ready(function(){

});
</script>




<div class="web-page">
	
<div class="bgimage" id="bgimage">
<div class="logo"><img src="images/NaCRRI.jpeg" width="170rem" style="border-radius:50%; width:7rem; height:7rem; color: rgba(128, 87, 0, 0.815); "></div>


	<div class="menulinks">
	<nav class="menu" id="">
		
		<a href="index.php">Home</a>
		<a href="#feedback">Feedback</a>

	</nav>
	</div>







	<div class="banner">
	<div class="landingtext">
	<h3>NaCRRI CROP RESEARCH INFORMATION DISSEMINATION SYSTEM</h3>
	</div>
	<div class="banner-text" id="bannertext">
		<p>Welcome to the NaCRRI Crop Research Information system</p>
		<i>It's our pleasure to serve you relentlessly....!!!</i>
		</div>
	</div>


	
	<div class="research-items" id ="research-items">
		<h2>The following are the researches so far conducted</h2>
	<div class="progressGif">
		<img src="images/tenor.gif" alt="" style="display:none;" id="progressGif">
  </div>
		<div class="items">
		<fieldset>
		<legend>CASSAVA</legend>
			<div class="item" id="item">
				<figcaption>cassava</figcaption>
				<a href="crops/cassava.php">
				<img src="images/cassava.jpeg" width="140%">
				</a>
				
				<div class="item-text"> 
					<div class="cassava">
				<b>Zero tolerance to cassava brown streak</b> NaCRRI has dedicated a sizeable amount of resources both human and <div class="showless" id="cassavatext">financial to tackle attacks of viruses such as cassava brown streak and cassava mosaic, that contribute to declining production of the food security crop.
				</div>
				<button id="btncassava" onclick="showmore()">read more</button><button id="btncassavaless" name="btncassavaless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>

			<fieldset>
			<legend>MAIZE</legend>
			<div class="item">
				<figcaption>Maize </figcaption>
				<img src="images/maize.jpeg" width="140%">
				
				<div class="item-text">
				 <b>Battling Maize lethal Necrosis</b> Maize production continues to be threatened by the spreadd of the Maize <div class="showless" id="maizetext"> lethal Necrosis (MLN). The disease was first reported in Uganda in 2012 in three districts in the Eastern region; but by 2015, morethan 18 districts were affected.</div>
				
				 <button id="btnmaize" onclick="showmore()">read more</button><button id="btnmaizeless" name="btnmaizeless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>

			<fieldset>
			<legend>SWEET POTATOES</legend>
			<div class="item">
				<figcaption>Sweet Potatoes</figcaption>
				<img src="images/cassava.jpeg" width="140%">
				
				<div class="item-text">
				 <b>Sweet potatoes seed system.</b>  NaCRRI through the first track project has launched an <div class="showless" id="potatoestext"> intensive dissemination drive to enhance access and adoption of improved sweet potato varieties through school-going children. This capaign in the financial year 2014/2015 was piloted in 12 primary schools located in Wakiso, Mukono and Kamuli districts. 1,200 pupils from st. Andrew Bulele, St. Kizito Ngombere, Nakalanda and Bugolombe primary schools were availed with vines to carry to thier parents for multiplications.</div>
				
				 <button id="btnpotatoes" onclick="showmore()">read more</button><button id="btnpotatoesless" name="btnpotatoesless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>

			<fieldset>
			<legend>BEANS</legend>
			<div class="item">
				<figcaption>Beans</figcaption>
				<img src="images/beans.jpeg" width="140%">
				
				<div class="item-text">
				 <b>Introducing pre-cooked beans for greater food and income security.</b> Approximately 855 of the 18 million rural Ugandans grow and depend majorly on beans <div class="showless" id="beanstext"> as food and for income generating purposes. Beans contribute to food security and are important source of nutirnts; providing a cheap source of huamn dietary protein (45%), calories, zinc, iron, calcium, folic acid, soluble fiber, complex carbohydrates and other essential minerals, good for prevention of diabetes and high blood pressure.</div>
				
				 <button id="btnbeans" onclick="showmore()">read more</button><button id="btnbeansless" name="btnbeansless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>

			<fieldset>
			<legend>RICE</legend>
				<div class="item">
					<figcaption>Rice</figcaption>
				<img src="images/rice.jpeg" width="140%">
				
				<div class="item-text" style="margin-top:-6rem;">
				<b> Squaring off with Rice yellow Mottle virus.</b> Rice yellow mottle virus (RYMV) is a key viral constraint to rice production in Africa and increasingly in other parts of <div class="showless" id="ricetext"> the world. First identified in Kenya nearly 50 years ago, RYMV can cause yield losses of 10 to 100% depending on the rice variety and period of infection.</div>
				
				<button id="btnrice" onclick="showmore()">read more</button><button id="btnriceless" name="btnriceless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>

			<fieldset>
			<legend>OIL PALMS</legend>
			<div class="item">
				<figcaption>Oil Palms</figcaption>
				<img src="images/rice.jpeg" width="140%" height="40%">
				
				<div class="item-text" style="margin-top:-6rem;">
				<b>Boosting the production of Oil palms through extensive research.</b> NaCRRI contiues to deleve more into research efforts geared towards to bring out <div class="showless" id="oilpalmstext"> the best oil palm yields for farmers in order to modestly boost thier production in this particular crop. It's envisioned that more research will aid in controlling the various oil palm diseases that could be hazardious to this crop. </div>
				
				<button id="btnoilpalms" onclick="showmore()">read more</button><button id="btnoilpalmless" name="btnoilpalmless" style="display:none;">show less</button>
			</div>
			</div>
			</fieldset>
			
		</div>
	</div>
	
	<div class="feedback" id ="feedback">
	<h2>Feedback</h2>
	<form>
		<input type="text" name="name" placeholder="Your name" id="name"><br><br>
		<input type="text" name="email" placeholder="Your E-mail" id="email"><br><br>
		<input type="textarea" name="" placeholder="Your Subject" id=""> <br><br>
		<textarea placeholder=" Write Your Message Here" name="feedback" id="feedback" ></textarea><br><br>
		<button id="homepageFeedback">Send Message</button><br><br>
	</form>
	</div>
	<div class="Subscribe">
		<h3>Subscribe Now</h3>
		<form>
<input type="email" name="Email" placeholder=" Enter Your Email here">
<button>Subscribe From Here</button>
<p>We will be providing timely updates to subscribed users to their email addresses</p>
</form>
</div>

<div class="copyright">
		<p>&copy Copyright Reserved | NaCRRI | 2020 </p>
	</div>
</div>
</div>

<?php
//include("feedback-footer.php");
?>

	<script src="script/jquery-3.4.1.min.js"></script>
	<script src="script/main.js"></script>

	<script>
		$(document).ready(function(){
			var username = "<?php echo $_SESSION['username'] ;?>";
			var profilePic = "<?php echo $_SESSION['UserprofilePic'] ;?>";

			if (profilePic=="") {
				$("#logInImage").attr("src", "images/user.svg");
			}else{
				
			}

			if(username!=""){
				$("#loginstatus").toggle();
				$("#logout").toggle();
			}
		//if (username=="mathiaswamucani") {
			//$("#logInName").html("<a href='index.php'>mathiaswamucani</a>");
		//}
		$("#inputfile").click(function(){
			//if($("#inputfile").val()==""){
				$("#btnEditPic").toggle();
			//}
			
			
			//$("#logInImage").attr("src", inputimage )
		});
		

		$("#btnLogInpic").click(function(){
			
			$("#inputfile").toggle();
			
			//$("#btnEditPic").toggle();
			if (profilePic!="") {
				$("#btnDeletePic").toggle();
			}
			if ($("#inputfile").is(":hidden") && $("#inputfile").val()==""  ) {
			$("#btnEditPic").hide();
		}
			
		});

		$("#btnDeletePic").click(function(){
			alert("Profile picture deleted, you can add another one.");
		});

		$("#btnEditPic").click(function(){
			if($("#inputfile").val()==""){
				alert("Please choose an image to set as profile picture");

				location.href = "homepage.php";
			}else{
			
				//$("#progressGif").toggle(40000, function(){
					alert("Your Profile pictutre has been updated successfully...!!!");
				//});
				
			}
		});
		});
	</script>

	
</body>
</html>