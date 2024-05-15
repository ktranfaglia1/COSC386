<?php
// Include the connection file
include("connection.php");

// Check if the form is submitted and the 'lastName' field is set
if(isset($_POST['lastName']) && !empty($_POST['lastName'])) {
    // Sanitize input to prevent SQL injection
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);

    // Query to search for owners by last name
    $query = "SELECT * FROM owners WHERE lname LIKE '%$lastName%'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Display header
    echo "<b><center>Search Results for Owner</center></b><br><br>";

    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Display table header
        echo "<table>";
        echo "<tr>";
        echo "<th>Last Name</th>";
        echo "<th>First Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>Street</th>";
        echo "<th>City</th>";
        echo "<th>State</th>";
        echo "<th>Postal</th>";
        echo "</tr>";

        // Fetch and display each record
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['street'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['postal'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No sellers found for the specified last name.";
    }
} else {
    echo "Please enter a seller's last name to search.";
}

// Close the connection
mysqli_close($con);
?>