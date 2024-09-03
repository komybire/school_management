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

// Get the first name and middle name from the query string
$firstName = $_GET['firstName'];
$middleName = $_GET['middleName'];

// Construct the SQL query to fetch the student name based on the first name and middle name
$query = "SELECT firstname, middlename FROM students WHERE firstname = '$firstName' AND middlename = '$middleName'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Student found, display "Student is registered" in an alert and redirect to another page
    echo '<script>alert("Student is registered"); window.location.href = "one.php";</script>';
} else {
    // Student not found, display "Student name not found" in an alert
    echo '<script>alert("Student name not found");</script>';
}

$conn->close();
?>