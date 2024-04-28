<?php
//make a db connection
$server ="localhost";
$user ="yousoeun"; //replace ??? with your user name
$pass ="cosc3862024!"; //replace xxx with your password
$dbname ="yousoeun"; //replace ??? with your databasename
//call the connection function
$con = mysqli_connect($server, $user, $pass, $dbname);
// check connection
if(!$con)
{
  echo "Error: " . mysqli_connect_error();
  exit();
}
//show that connection is successful.
echo "<b>Connection is successful!</b> <br/>";
?>
