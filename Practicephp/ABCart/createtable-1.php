<?php
// We need to include 'connect.php' here
include ("connection.php");

// Query String. 
$query="CREATE TABLE MYSALES(id int(6) NOT NULL auto_increment,
item varchar (10) NOT NULL, quantity integer NOT NULL, first varchar(15) NOT NULL, last varchar(15) NOT NULL,
phone varchar(20) NOT NULL, PRIMARY KEY (id))
";
//Execute query. Note that the return value of mysql_query($query) is TRUE if transaction was successful. 

$result = mysqli_query($con, $query);
//Show the message
if ($result)
	echo "The MYSALES table is created successfully.";
else
	echo "Error while creating the SALES table.";
//Close connection
mysqli_close($con);
?>
