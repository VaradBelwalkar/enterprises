<?php
// Start or resume the session
session_start();

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "atlas_schema"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_errno) {
    echo "Connection Error.";
}
// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    // Redirect to the login page if not authenticated
    header('Location: login.php');
    exit();
}

    $usr_name = $_SESSION["username"];
    $prd = $_GET['product'];
    echo $usr_name;
    echo $prd;

    $query = 'INSERT INTO orders(client,prd_name) values("'.$usr_name.'","'.$prd.'");';
    echo $query;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    header('Location: cart.php');
    exit();

?>


