
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maizepage</title>
    <link rel="stylesheet" href="style/main.css">

    <style>
        .research{
            background-color: rgb(161, 223, 202); 
            font-size:1.3rem; 
            text-align:center; 
            text-indent:1rem;
        }
        .post{
            text-align:left;
            font-size:1rem;

        }
     @media screen and (max-width: 600px) {
        .research{
            font-size:1rem;
            text-align:center;
        }
        .post{
            text-align:left;
            font-size:.65rem;

        }

     }
    </style>

</head>
<body>
<?php
//include("logo.php");
?>
<div class="fullpage" style="background-color:wheat; text-align:center; padding-bottom:2rem; padding-top:8rem; ">
<h1 style="background-color:lightgreen; width:100%; postion:fixed; padding-left:1rem; font-size:1.6rem">MAIZE RESEARCHES</h1>
<h3>This the place where you get to know all about the maize and what it takes to become a good farmer in maize</h3>
<h4>Feel free to give us your feedback about the researche(es) herein. We'll respond to you immediately</h4>
<h4>These researches are being displayed starting with the latest ones.</h4>


<div class="research" >

<?php
session_start();
require("../db_connection.php");
include("cropsnavigation.php");

$check= "SELECT * FROM cropsresearch order by id desc";
$checkrows=$connect->query($check);

if ($checkrows->num_rows>0){
    while($row = $checkrows->fetch_assoc()){
        $maize = $row['maize'];
        $_SESSION['maizeText'] = $maize;
        
        if ($row['date']!="" && $row['maize']!='' && $row['AdminName']!="") {
            
            
        
            echo nl2br("<div class='post'><b style=''>Posted at ". $row["date"]." by "."<i style='color:blue;'>".$row['AdminName']."</i>"."</b>"."</div>"."<br>".wordwrap($row["maize"], 150))."<button style='background-color:wheat;'>read more posts</button>";
        echo "<br>";
            echo "__________________________________________________________________________________________________________________________________";
            echo "<br>";
            echo "<br>";
    }
}
}else{
    echo "No research so far posted about maize.....";
    echo "Please check later....!!!!";
}
if ($_SESSION['maizeText']=='') {
echo $maize;
}
$connect->close();

?>

</div>
</div>

<?php
include("../feedback-footer.php");

?>

<script src="../script/jquery-3.4.1.min.js"></script>
<script src="script/main.js"></script>

<script>
	$(document).ready(function(){
        var maizeMore = "<?php echo $_SESSION['maizeText'] ;?>"; 
        if (maizeMore.length>10) {
            alert("hello");
        }
        
        
            
    });
</script>
</body>
</html>



