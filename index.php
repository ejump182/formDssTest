<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Request Form</title>
</head>
<body>
    <h1>Server Request Form</h1>
    <form action="submit.php" method="post">
        <label for="requester_name">Name:</label><br>
        <input type="text" id="requester_name" name="requester_name" required><br>
        <label for="requester_email">Email:</label><br>
        <input type="email" id="requester_email" name="requester_email" required><br>
        <label for="server_type">Server Type:</label><br>
        <select id="server_type" name="server_type" required>
            <option value="web">Web Server</option>
            <option value="database">Database Server</option>
            <option value="application">Application Server</option>
        </select><br>
        <label for="request_details">Request Details:</label><br>
        <textarea id="request_details" name="request_details" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
