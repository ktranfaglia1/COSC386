<?php
//get the user-enter key term
$last =$_POST['lastname'];

//make a connection
include("connection.php");

//execute sql
$sql = "SELECT * FROM PERSONS
WHERE LastName LIKE '%".$last."%'";
echo $sql;

//run sql
$result = mysqli_query($con, $sql);
//read the row using while loop
?>
<table border ="1">
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Age</td>
  </tr>
<?php
while($row = mysqli_fetch_assoc($result))
//opeing while
{
  ?>
  <tr>
    <td><?php echo $row['PersonID'] ?></td>
    <td><?php echo $row['FirstName'] ?></td>
    <td><?php echo $row['LastName'] ?></td>
    <td><?php echo $row['Age'] ?></td>
  </tr>
<?php
//closing while
}
?>
</table>
<?php
//close the connection
mysqli_close($con);
?>


