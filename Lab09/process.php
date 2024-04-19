<?php
include("connection.php");

// Collect all the information passed from the newBook.html page using $_POST array variable. 
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];

$query = "INSERT INTO BOOK (ISBN,Author,Title, Price) VALUES('$isbn','$author','$title','$price')";
$result = mysqli_query($con, $query);

// If the data is inserted successfully, list all the sales orders
if ($result) {
  $query = "SELECT * FROM BOOK";  // Create a query string
  $result = mysqli_query($con, $query);  // Get the result set
  
  echo "<b><center>List of Book Information</center></b><br><br>";

  // Display inserted information for all rows
  while($row = mysqli_fetch_assoc($result)){
    echo "BOOK ID: ".$row['BookID']."</br>"; 
    echo "ISBN:    ".$row['ISBN']."</br>"; 
    echo "Author:  ".$row['Author']."</br>"; 
    echo "Title:   ".$row['Title']."</br>"; 
    echo "price:   ".$row['Price']."</br>"; 
    echo "<hr> </br>"; 
  }
}
else {
  die ("Cannot create a new sales order");
}
mysqli_close($con);
?>