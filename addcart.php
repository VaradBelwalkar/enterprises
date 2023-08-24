<?php
session_start();

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "atlas_schema"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_errno) {
    echo "Connection Error.";
    exit();
}

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: ../login.php');
    exit();
}

$usr_name = $_SESSION["username"];
$prd = $_GET['product'];

$query = 'INSERT INTO orders (client, prd_name) VALUES (?, ?)';
$stmt = $conn->prepare($query);

if ($stmt) {
    $stmt->bind_param('ss', $usr_name, $prd);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    // Redirect only if the insertion was successful
    header('Location: ../cart.php');
    exit();
} else {
    echo "Query Error.";
}
?>
