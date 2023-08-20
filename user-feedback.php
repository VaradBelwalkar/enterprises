<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $json_data = file_get_contents("php://input");

    $data = json_decode($json_data, true);

    $username = $data["name"];
    $email = $data["email"];
    $message = $data["message"];

    $servername = "localhost";
    $username_db = "root";
    $password_db = "temp";
    $database = "your_database";

    $conn = new mysqli($servername, $username_db, $password_db, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $insert_query = "INSERT INTO user_feedback (username, email, message) VALUES ('$username', '$email', '$message')";

    if ($conn->query($insert_query) === true) {
        $response = array("message" => "Form data inserted successfully");
        echo json_encode($response);
    } else {
        $response = array("message" => "Error inserting form data: " . $conn->error);
        http_response_code(500);
        echo json_encode($response);
    }

    $conn->close();
} else {
    // Return an error response
    http_response_code(400);
    echo json_encode(array("message" => "Bad Request"));
}
?>