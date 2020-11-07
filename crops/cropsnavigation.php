<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style/index.css">
    <style>
html{
    max-width:100%;
    overflow-x:hidden;
}
body{
    max-width:100%;
    overflow-x:hidden;
}


.dropbtn{
    background-color: #b542d5;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 30%;
    margin-top: -2.8rem;
    box-shadow:10px 10px 5px rgb(66, 138, 169);;
    position: fixed;
    z-index: 2;
    margin-left: 15rem;
}

.dropdown:hover .dropbtn{
    background-color: #3e8e41;


}
.dropdown{
    position: fixed;
    z-index: 2;
    display: inline-block;
    top: 5rem;
    margin-left: -18rem;
    width: 100%;
    height: 20px;
    text-align:left; 
}

.dropdown-content{
    display: none;
    position: absolute;
    background-color: #cfc912f7;
    min-width: 16%;
    left: 17rem;
    box-shadow: 0px 8px 16px 0px rgba(5,0,1,1.2);
    padding-top: -1rem;
    padding-right: 2rem;
    z-index: 1;
    
}

.dropdown-content a {
    color:magenta;
    padding: 12px 12px;
    text-decoration: none;
    display: block;
    background-color:lightblue;
    border:2px dashed;
    border-color: blue;
    
    
}
.dropdown-content a:hover{
    background-color:#f1f1f1;
    

}
.dropdown:hover .dropdown-content {
    display: block;
    color: blue;
    text-align: left;
}








.menu{
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    background-color: cyan;
    position: fixed;
    z-index: 1;
    margin-left: 1rem;
    margin-top: -18rem;
    border: 2px solid rebeccapurple;
    

}

.menu a {
color: black;
text-decoration: none;
margin: 5px;
cursor: pointer;
font-size: 1.4rem;


}

.menu a:hover{
    background-color: rgb(160, 104, 147);
    color: white;
}

.dropbtn{
    background-color: #b542d5;
    color: white;
    padding: 6px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 20%;
    margin-top: -2.8rem;
    box-shadow:10px 10px 5px rgb(66, 138, 169);;
    position: fixed;
    z-index: 2;
    margin-left: 15rem;
}

.dropdown:hover .dropbtn{
    background-color: #3e8e41;


}
.dropdown{
    position: fixed;
    z-index: 2;
    display: inline-block;
    top: 5rem;
    margin-left: -18rem;
    width: 100%;
    height: 20px;
    text-align:left; 
}

.dropdown-content{
    display: none;
    position: absolute;
    background-color: #cfc912f7;
    min-width: 16%;
    left: 17rem;
    box-shadow: 0px 8px 16px 0px rgba(5,0,1,1.2);
    padding-top: -1rem;
    padding-right: 2rem;
    z-index: 1;
    
}

.dropdown-content a {
    color:magenta;
    padding: 12px 12px;
    text-decoration: none;
    display: block;
    background-color:lightblue;
    border:2px dashed;
    border-color: blue;
    
    
}
.dropdown-content a:hover{
    background-color:#f1f1f1;
    

}
.dropdown:hover .dropdown-content {
    display: block;
    color: blue;
    text-align: left;
}


@media screen and (max-width: 640px) {
    .dropbtn{
        width:13rem;
        font-size:12px;
        border-radius:18px;
        margin-left:11rem;
        
    }
    .dropdown{
        top:6rem;
    }
    .dropdown-content{
        left:12.5rem;
        width:10rem;
    }
    .dropdown-content a {
        font-size:.8rem;
        width:9rem;
        margin-left:-1.9rem;
    }
    .menu{
        margin-left: -3.6rem;
        margin-top: -20rem; 
        border:none;
        text-transform:capitalize;
        transform: rotate(-90deg);
        
    }
    .menu a{
        font-size:1rem;
    }

}


    </style>
</head>
<body>
<?php

?>

<nav class="menu">
		
		<a href="../homepage.php">Back</a>
		<a href="../feedback-footer.php"> Feedback</a>

	</nav>

<div class="dropdown" >
		<button class="dropbtn" id="dropdownbtn" onclick="  dropdownmenu()" style="margin-top:-2.8rem;">CROPS RESEARCH MENU</button>
	<div class="dropdown-content" id="dropdowncontent" >
		<ul>
			<div class="active">
			<a href="cassava.php">CASSAVA</a>
			</div>
			<div class="active">
			<a href="maize.php">MAIZE </a>
			</div>
			<div class="active">
			<a href="potatoes.php">SWEET POTATOES </a>
			</div>
			<div class="active">
			<a href="beans.php">BEANS </a>
			</div>
			<div class="active">
			<a href="rice.php">RICE </a>
			</div>
			<div class="active">
            <a href="oil_palm.php">OIL PALM</a>

            <a href="../homepage.php">HOME</a>
            
		</ul>
	</div>

</div> 




<script src="script/jquery-3.4.1.min.js"></script>
<script src="script/main.js"></script>

<script>
function dropdownmenu(){
    var dropdownmenu = document.getElementById("dropdowncontent");
    if(dropdownmenu).style.display==="none"{
        document.getElementById("dropdowncontent").show();
}


</script>


</body>
</html>