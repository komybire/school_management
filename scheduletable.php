<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the semester_dates table
$sql = "CREATE TABLE semester_dates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    semester VARCHAR(50),
    registration_date DATE,
    opening_date DATE,
    midterm_schedule DATE,
    final_exam_date DATE,
    closing_date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table semester_dates created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>