<?php
session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 1) {
  $servername = "localhost"; // Replace with your server name
  $username = "root"; // Replace with your MySQL username
  $password = "temp"; // Replace with your MySQL password
  $database = "agmpublicschool"; // Replace with your database name
  // Create a connection
  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_errno) {
    echo "Connection Error.";
  }
  $id = $_POST['id']; // Retrieve the ID from the AJAX request
  $value = $_POST['value']; // Retrieve the updated value from the AJAX request

  // Perform the update operation using the ID and updated value

  // Assuming you have established a database connection earlier in your PHP code
  $query = "UPDATE staff SET details = '$value' WHERE srno = '$id'"; // Replace 'staff' with your table name and 'id' with the actual column name
  if (mysqli_query($conn, $query)) {
    echo 'success';
  } else {
    echo 'error';
  }

  // Close the database connection
  mysqli_close($conn);
}
?>