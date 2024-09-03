
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
    // Retrieve form data
    $subject= $_POST['subject'];
    $description = $_POST['description'];
    
    $stmt = $conn->prepare("INSERT INTO allsubject (subject, description) VALUES (?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ss", $subject,$description);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Data inserted successfully!')</script>";
        } else {
            echo "<script>alert('There was an error inserting data.')</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}


// Close connection
$conn->close();
?>
