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
    if (isset($_GET["subject"])) {
        $rowsubject = $_GET["subject"];

        // Perform delete operation
        $deleteQuery = "DELETE FROM allsubject WHERE subject = ?";
        $stmt = $conn->prepare($deleteQuery);

        if (!$stmt) {
            echo "Error preparing statement: " . $conn->error;
            exit();
        }

        $stmt->bind_param("s", $rowsubject);

        if ($stmt->execute()) {
            //echo "Row deleted successfully.";
            header("Location: allsubject.php");
            exit();
        } else {
            echo "Error deleting row: " . $stmt->error;
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>