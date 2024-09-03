<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];

    // Validate and process the data

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $createTableSql = "CREATE TABLE IF NOT EXISTS staff (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        position VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL
    )";

    if ($conn->query($createTableSql) === false) {
        echo "Error creating table: " . $conn->error;
        $conn->close();
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO staff (name, position, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $position, $email);
    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo "Staff member added successfully!";
    } else {
        echo "Error adding staff member: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>