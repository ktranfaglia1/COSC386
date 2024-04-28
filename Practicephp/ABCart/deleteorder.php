<?php
//get the user enter key term
$last = $_POST['last'];

//get a connection
include("connection.php");

//sql
$sql = "SELECT * FROM MYSALES 
WHERE last LIKE '%".$last."%'";

//run sql
$result = mysqli_query($con, $sql);
?>
<table border = "1">
  <tr>
    <td>ID</td>
    <td>Item</td>
    <td>Quantity</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Phone Number</td>
</tr>
<?php
while($row = mysqli_fetch_assoc($result))
//opeing while
{
?>
<tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['item'] ?></td>
  <td><?php echo $row['quantity'] ?></td>
  <td><?php echo $row['first'] ?></td>
  <td><?php echo $row['last'] ?></td>
  <td><?php echo $row['phone'] ?></td>
</tr>
<?php
//closing while
}
?>
</table>
<?php
$sql2 = "DELETE FROM MYSALES WHERE last LIKE '%".$last."%'";
echo $sql2;
if (mysqli_query($con, $sql2)) {
  echo "<br/> Record deleted successfully";
} else {
  echo "<br /> Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>