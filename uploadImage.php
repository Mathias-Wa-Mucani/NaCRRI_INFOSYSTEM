
<?php
session_start();
require("db_connection.php");

$target_dir = "profilePics/";

$target_file = $target_dir . basename( $_FILES['uploadedfile']['name']); 
if($target_file!= "images/".$_SESSION['username']){
    
    $target_file =  "profilePics/".$_SESSION['username']."-profilePic".".".pathinfo($target_file, PATHINFO_EXTENSION);
    
}
$uploadOk = 1;
//$imageRename = rename(" $_FILES['uploadedfile']['name']", "$_FILES['uploadedfile']['$_SESSION[username]']");
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);



if(isset($_POST['submit'])){
    if ($_POST['uploadedfile']=="") {
        header("Location: homepage.php");
    }

$check = getimagesize($_FILES['uploadedfile']['tmp_name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],  $target_file)) 
{

//$conn = new mysqli("localhost", "root", "", "sampledb");

 $sql = "UPDATE usersignup SET `profileImage` = '$target_file' where username='$_SESSION[username]'";
 
 
if ($connect->query($sql) === TRUE) {
    echo "<br><br>";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$sql1 = "SELECT profileImage FROM usersignup where username = '$_SESSION[username]' order by id desc limit 1";
$result1 = $connect->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
     $path=$row["profileImage"];
     $_SESSION['profilePic'] = $path;
	  echo "<img src='$path' height='280' width='320' /><br>";
	 echo $_SESSION['profilePic'];
    }
} 

$connect->close();
}



if($check!==false){
    echo "File is an image- ". $check['mime'];
    //echo $check;
    $uploadOk = 1;
}else{
    echo "File is not an image";
    $uploadOk = 0;
}
}else if(isset($_POST['btnDeletePic'])){
    if ($_SESSION['profilePic']!="") {

    
    $deleteProfilePic = "UPDATE usersignup SET `profileImage` = '' where username='$_SESSION[username]'";
    echo $_SESSION['profilePic'];
    if ($connect->query($deleteProfilePic) === TRUE) {
    echo "Profile picture deleted successfully...!!!";
    }else{
        echo "Something went wrong";
    }
}
header("Location: homepage.php");
}

?>