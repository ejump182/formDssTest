<?php
$servername = "localhost";
$username = "root";
$password = "yourpassword";
$dbname = "server_requests";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, requester_name, requester_email, server_type, request_details, submitted_at FROM requests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Server Type</th><th>Request Details</th><th>Submitted At</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["requester_name"]. "</td><td>" . $row["requester_email"]. "</td><td>" . $row["server_type"]. "</td><td>" . $row["request_details"]. "</td><td>" . $row["submitted_at"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
