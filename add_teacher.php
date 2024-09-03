<?php
// Database connection
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher = $_POST["teacher"];
    $subject = $_POST["subject"];
    $class = $_POST["class"];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO teacherassign (teacher, subject, class) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $teacher, $subject, $class);

    if ($stmt->execute()) {
        echo "<script>alert('Teacher added successfully!')</script>";
		
    } else {
        echo "<script>alert('There was an error adding the teacher.')</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>