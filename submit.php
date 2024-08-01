<?php
$servername = "localhost";
$username = "root";
$password = "yourpassword";
$dbname = "server_requests";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$requester_name = $_POST['requester_name'];
$requester_email = $_POST['requester_email'];
$server_type = $_POST['server_type'];
$request_details = $_POST['request_details'];

$sql = "INSERT INTO requests (requester_name, requester_email, server_type, request_details) VALUES ('$requester_name', '$requester_email', '$server_type', '$request_details')";

if ($conn->query($sql) === TRUE) {
    echo "New request submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
