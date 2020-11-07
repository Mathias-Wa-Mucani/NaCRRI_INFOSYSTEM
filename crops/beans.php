
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beanspage</title>
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
<h1 style="background-color:lightgreen; width:100%; postion:fixed; padding-left:1rem; font-size:1.6rem;">BEANS RESEARCHES</h1>
<h3>This is the place where you get to know all about the beans and what it takes to become a good farmer in beans</h3>
<h4>Feel free to give us your feedback about the researche(es) herein. We'll respond to you immediately</h4>
<h4>These researches are being displayed starting with the latest ones.</h4>


<div class="research" >
<?php
require("../db_connection.php");
include("cropsnavigation.php");

$check= "SELECT * FROM cropsresearch order by id desc ";
$checkrows=$connect->query($check);
if ($checkrows->num_rows>0){
    while($row = $checkrows->fetch_assoc()){
        $id = intval($row['date']);
        //echo $rowid['date'].$rowid['beans']."<form action ='$_SERVER[PHP_SELF]' method='post'>
            //<input type='text' value='$id' name='id'>
        //</form>";


//$iddate = $_POST['id'];
//$check= "SELECT * FROM cropsresearch where date=$id order by id desc ";
//$checkrows=$connect->query($check);

//if ($checkrows->num_rows>0){
    //while($row = $checkrows->fetch_assoc()){
        
        /*echo "
        <pre>
        <br> ".wordwrap($row["beans"], 150 )."</br>
        </pre>
        ";     
        echo "__________________________________________________________________________________________________________________________________";
        */
        if ($row['date']!="" && $row['beans']!='' && $row['AdminName']) {
            # code...
        
            echo nl2br("<div class='post'><b style=''>Posted at ". $row["date"]." by "."<i style='color:blue; font-size:;'>".$row['AdminName']."</i>"."</b>"."</div>"."<br>".wordwrap($row["beans"], 150));
            echo "<br>";
        echo "__________________________________________________________________________________________________________________________________";
        echo "<br>";
        echo "<br>";
    }
}
}else{
    echo "No research so far posted about beans.....";
    echo "Please check later....!!!!";
}
$connect->close();

?>
</div>
</div>

<?php
include("../feedback-footer.php");

?>

<script src="script/jquery-3.4.1.min.js"></script>
<script src="script/main.js"></script>
</body>
</html>



