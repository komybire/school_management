<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the "Students" table
$sql = "CREATE TABLE grade10table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    MiddleName VARCHAR(30),
    LastName VARCHAR(30) NOT NULL,
    Gender ENUM('Male', 'Female') NOT NULL,
    Program VARCHAR(50) NOT NULL,
    Age INT(3) NOT NULL,
    parentname VARCHAR(100) NOT NULL,
    parentPhone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    grade VARCHAR(10) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table grade10table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>