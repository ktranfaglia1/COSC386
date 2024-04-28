<?php
//include connection.php to make a database connection and select the database
include("connection.php");
//Create a table statement
$sql="CREATE TABLE PERSONS (
  PersonID int AUTO_INCREMENT, 
  FirstName varchar(15), 
  LastName varchar(15), 
  Age int, 
  PRIMARY KEY(PersonID) )";
  //Execute query
  $result =mysqli_query($con, $sql);

  //Check any error
  if($result) {
    echo "Table PERSONS has been created successfully";
  } else{
    echo "Error creating table: " .mysqli_error($con);
  }
  //Close the connection
  mysqli_close($con);
  ?>
