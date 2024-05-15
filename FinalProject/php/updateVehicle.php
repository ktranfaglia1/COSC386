<?php
// Include the connection file
include("connection.php");

// Check if the vehicle ID is set and not empty
if (isset($_POST['vehicleID']) && !empty($_POST['vehicleID'])) {
    // Sanitize input to prevent SQL injection
    $vehicleID = mysqli_real_escape_string($con, $_POST['vehicleID']);
    
    // Retrieve data from the form
    $make = mysqli_real_escape_string($con, $_POST['make']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $mileage = mysqli_real_escape_string($con, $_POST['mileage']);
    $regnumber = mysqli_real_escape_string($con, $_POST['regnumber']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    // Query to update the vehicle
    $query = "UPDATE vehicles SET make='$make', model='$model', year='$year', mileage='$mileage', regnumber='$regnumber', price='$price' WHERE id=$vehicleID";

    // Execute the query
    if (mysqli_query($con, $query)) {
        echo "Vehicle updated successfully";
    } else {
        echo "Error updating vehicle: " . mysqli_error($con);
    }
} else {
    echo "Vehicle ID is required";
}

// Close the connection
mysqli_close($con);
?>