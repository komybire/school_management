<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS studentinformation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    middleName VARCHAR(50) NOT NULL,
    averageScore DECIMAL(5,2),
    rank INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'studentinformation' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>