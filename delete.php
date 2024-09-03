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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $rowId = $_GET["id"];

        // Perform delete operation
        $deleteQuery = "DELETE FROM students WHERE id = '$rowId'";
        if ($conn->query($deleteQuery) === TRUE) {
            //echo "Row deleted successfully.";
			header("Location: process.php");
        } else {
            echo "Error deleting row: " . $conn->error;
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();

?>