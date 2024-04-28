<?php
//make a connection
include("connection.php");

//execute SQL
$sql ="SELECT * FROM PERSONS ";

//echo sql
//run sql
$result =mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)){
  echo $row['FirstName']." ". $row['LastName'];
  echo "<br />";
}
//close the connection
mysqli_close($con);



?>