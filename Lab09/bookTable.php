<?php
include("connection.php");

$table = "CREATE TABLE BOOK (BookID int(6) NOT NULL AUTO_INCREMENT,
        ISBN varchar(15) NOT NULL,
        Author varchar(15),
        Title varchar(15),
        Price DECIMAL(10,2),
        PRIMARY KEY(BookID) )";

$result = mysqli_query($con, $table);

if ($result) {
        echo "Table Book has been created successfully <br/>";
} else {
        echo "Error creating table: " .mysqli_error($con);
}
mysqli_close($con);
?>