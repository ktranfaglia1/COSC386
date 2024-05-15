<?php
// Include the connection file
include("connection.php");

// Check if the form is submitted and the 'make' field is set
if(isset($_POST['make']) && !empty($_POST['make'])) {
    // Sanitize input to prevent SQL injection
    $make = mysqli_real_escape_string($con, $_POST['make']);

    // Query to search for vehicles by make
    $query = "SELECT * FROM vehicles WHERE make LIKE '%$make%'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Display header
    echo "<b><center>Search Results for Vehicle</center></b><br><br>";

    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Display table header
        echo "<table>";
        echo "<tr>";
        echo "<th>Make</th>";
        echo "<th>Model</th>";
        echo "<th>Year</th>";
        echo "<th>Mileage</th>";
        echo "<th>Registration ID</th>";
        echo "<th>Sales Price</th>";
        echo "</tr>";

        // Fetch and display each record
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['mileage'] . "</td>";
            echo "<td>" . $row['regnumber'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No vehicles found for the specified make.";
    }
} else {
    echo "Please enter a vehicle make to search.";
}

// Close the connection
mysqli_close($con);
?>