<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS student_results (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    middleName VARCHAR(255) NOT NULL,
	subject VARCHAR(50),
    quiz FLOAT NOT NULL,
    midterm FLOAT NOT NULL,
    assignment FLOAT NOT NULL,
    final FLOAT NOT NULL,
    total FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'student_results' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>