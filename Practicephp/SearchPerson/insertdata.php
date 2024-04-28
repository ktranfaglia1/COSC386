<?php
//make a connection
include("connection.php");

//SQL Statements
$sql1="INSERT INTO PERSONS(FirstName,LastName,Age)
VALUES('Peter','Griffin', 40)";
$sql2="INSERT INTO PERSONS(FirstName,LastName,Age)
VALUES('Emily','Jones', 50)";
$sql3="INSERT INTO PERSONS(FirstName,LastName,Age)
VALUES('Ethan','Thompson', 45)";
$sql4="INSERT INTO PERSONS(FirstName,LastName,Age)
VALUES('Carly','Musk', 30)";

//execute SQL
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql3);
$result4 = mysqli_query($con, $sql4);

//check the result
if(!$result1){
  echo "Error: ".$sql1 ."<br>".mysqli_error($con);
}elseif(!$result2){
  echo "Error: ".$sql2."<br>".mysqli_error($con);
} elseif(!$result3){
echo "Error: ".$sql3."<br>".mysqli_error($con);}
elseif(!$result4){
  echo "Error: ".$sql2."<br>".mysqli_error($con);}

else{
  echo "New records created successfully";
}
//close the connection
mysqli_close($con);
?>
