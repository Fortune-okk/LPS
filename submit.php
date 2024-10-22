<?php
// Step 2.1: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 2.2: Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Step 2.3: Connect to the database
    $servername = "localhost"; // Replace with your database server
    $username = "your_username"; // Replace with your database username
    $password = "your_password"; // Replace with your database password
    $dbname = "your_database"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Step 2.4: Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2.5: Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email); // "ss" means two string parameters

    // Step 2.6: Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Step 2.7: Close connections
    $stmt->close();
    $conn->close();
}
?>
