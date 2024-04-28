<?php
// We need to include 'connect.php' here
include ("connection.php");

//Collet all the information passed from the previous order.html page using $_POST array variable. 
$item= $_POST['item'];
$qty= $_POST['quantity'];
$fname= $_POST['first'];
$lname= $_POST['last'];
$phone= $_POST['phone'];

$query = "INSERT INTO MYSALES (item, quantity,first, last, phone) 
VALUES('$item','$qty','$fname','$lname','$phone')";
$result=mysqli_query($con, $query);

if ($result){
//If the data is inserted successfully, we want to list up all the sales orders
	//create a query string
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
}
else
	echo "Cannot create a new sales order";
  exit();

mysqli_close($con);
?>
