<?php
//make a connection
$server = "localhost";
$user= "yousoeun";
$pass= "cosc3862024!";
$dbname="yousoeun";

//call the connection function
$con= mysqli_connect($server, $user, $pass, $dbname);

//check connection
if(!$con){
  echo "Error: ".mysqli_connect_error();
  exit();
}

?>