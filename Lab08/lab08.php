<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Car Form Results </title>
  </head>
  <body>
    <?php
      // Retrieve and display car information
      echo "<h2> Car Information </h2>";
      echo "<p> Make: " . $_POST["make"] . "</p>";
      echo "<p> Model: " . $_POST["model"] . "</p>";
      echo "<p> Year: " . $_POST["year"] . "</p>";
      echo "<p> Mileage: " . $_POST["mileage"] . "</p>";
    
      // Retrieve and display contact information
      echo "<h2> Contact Information </h2>";
      echo "<p> First Name: " . $_POST["fname"] . "</p>";
      echo "<p> Last Name: " . $_POST["lname"] . "</p>";
      echo "<p> Email: " . $_POST["email"] . "</p>";
    ?>
  </body>
</html>