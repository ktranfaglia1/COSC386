<?php
// Include the connection file
include("connection.php");

// Query to select all owner and vehicle information
$query = "SELECT * FROM owners";

// Execute the query
$result = mysqli_query($con, $query);

// Display header
echo "<b><center> All Owner and Vehicle Information </center></b><br><br>";

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Fetch and display each record
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<table>";
        echo "<tr>";
        echo "<td colspan='4' class='header'>Vehicle Information</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Vehicle ID:</label></td>";
        echo "<td>" . $row['vehicleID'] . "</td>";
        echo "<td><label>Make:</label></td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Model:</label></td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td><label>Year:</label></td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Mileage:</label></td>";
        echo "<td>" . $row['mileage'] . "</td>";
        echo "<td><label>Registration ID:</label></td>";
        echo "<td>" . $row['regnumber'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Sale Price:</label></td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td colspan='2'></td>"; // Empty cells to align columns
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='4' class='header'>Seller Information</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Owner ID:</label></td>";
        echo "<td>" . $row['ownerID'] . "</td>";
        echo "<td><label>First Name:</label></td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Last Name:</label></td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td><label>Email:</label></td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Phone:</label></td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td colspan='2'></td>"; // Empty cells to align columns
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>Street:</label></td>";
        echo "<td>" . $row['street'] . "</td>";
        echo "<td><label>City:</label></td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><label>State:</label></td>";
        echo "<td>" . $row['state'] . "</td>";
        echo "<td><label>Postal:</label></td>";
        echo "<td>" . $row['postal'] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<hr> <br>"; 
    }
} else {
    echo "No owner and vehicle information found.";
}

// Close the connection
mysqli_close($con);
?>