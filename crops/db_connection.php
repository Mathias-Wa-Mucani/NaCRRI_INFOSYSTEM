<?php 

  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "NaCRRI_DB";

  //mysqli()--must have the word new
  $connect = new mysqli($server, $username, $password, $database);

  //check connection
  if ($connect) {
  	
  } else {
  	echo "An error has occurred......!!!";
  }

 ?>