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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class = mysqli_real_escape_string($conn, $_POST["class"]);
    $teacher_name = mysqli_real_escape_string($conn, $_POST["new_password"]);

    $query = "SELECT * FROM homeroom_teachers WHERE class = '$class'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $updateQuery = "UPDATE homeroom_teachers SET teacher_name = '$teacher_name' WHERE class = '$class'";
        if (mysqli_query($conn, $updateQuery)) {
            echo "Teacher name has been updated.";
        } else {
            echo "Error updating teacher name: " . mysqli_error($conn);
        }
    } else {
        echo "Class not found. Please try again.";
    }
}

$conn->close();
?>