<?php
// We need to include 'connect.php' here
include ("connection.php");

$query = "SELECT * FROM MYSALES";

	//get the result set
$result=mysqli_query($con, $query);

	// get the number of rows
	echo "<b><center>List of Sales Orders</center></b><br><br>";

	//Start while statement here
	
	while($row = mysqli_fetch_assoc($result)){
		echo "ITEM:".$row['item']."</br>"; 
		echo "QUANTITY:".$row['quantity']."</br>"; 
		echo "FIRST NAME:".$row['first']."</br>"; 
		echo "LAST NAME:".$row['last']."</br>"; 
		echo "PHONE:".$row['phone']."</br>"; 
		echo "<hr> </br>"; 

	}
	
mysqli_close($con);
?>